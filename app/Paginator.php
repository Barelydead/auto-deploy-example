<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Request;

/**
 * A controller for the Commentary.
 *
 * @SuppressWarnings(PHPMD.ExitExpression)
 */
class Paginator
{
    /**
    * Ser till att sidnumret enbart är mellan 1 och sista sidan
    *
    * @param int $pagenum, nuvarande sidnummer
    * @param int $lastpage, sista sidan/antalet sidor.
    *
    * @return $pagenum, kontrollerat sidnummer
    */
    public function validIntervall($pagenum, $lastpage)
    {
        if ($pagenum < 1) {
            $pagenum = 1;
        } else if ($pagenum > $lastpage) {
            $pagenum = $lastpage;
        }
        return $pagenum;
    }

    /**
    * Ser till att sista sidan inte kan vara negativ
    *
    * @param int $lastpage, sista sidan/antalet sidor.
    *
    * @return $lastpage, kontrollera sista sida/antalet sidor
    */
    public function validLastPage($lastpage)
    {
        if ($lastpage < 1) {
            $lastpage = 1;
        }
        return $lastpage;
    }

    /**
    * Ger information om hur många rader en tabell innehåller
    * @param string $table tabellnamn
    * @param array $tblprop med information om sökning ['searchcolumn' => , 'search' => , 'pages' =>, 'orderby' =>, 'orderas' =>]
    *
    * @return int count($searchres) antalet rader $table innehåller.
    */
    public function getTableCount($table, $tblprop)
    {

        $searchres = DB::table($table)->where($tblprop['searchcolumn'], 'LIKE', $tblprop['search'])->get();

        return count($searchres);
    }

    /**
    * Sammanbindande metod för framtagande av tabellresulstat med paginator. Resultat skickas tillbaka till kontrollern.
    * @param string $table tabellnamn som söks mot
    * @param array $tblprop med information om sökning ['searchcolumn' => , 'search' => , 'pages' =>, 'orderby' =>, 'orderas' =>]
    * @param int $pagenum nuvarande sida
    *
    * @return array $paginator ['tblres' => html, max => tot antal rader i tabell, current => nuvarande sida av totalt, ctrl => paginatorkontrollern]
    */
    public function paginator($table, $tblprop, $pagenum)
    {

        // $session            = $this->di->get("session");

        //Antalet rader i $table för nuvarande $tblprop['search'] i $tblprop['searchcolumn']
        $searchcount        = $this->getTableCount($table, $tblprop);
        // Antalet sidor för tabellen med nuvarande sökning.
        $lastpage           = ceil($searchcount/$tblprop['pages']);
        // Ser till att antalet sidor inte är negativt
        $lastpage           = $this->validLastPage($lastpage);
        // Ser till att sidnumret enbart kan vara mellan 1 och sista sidan.
        $pagenum            = $this->validIntervall($pagenum, $lastpage);

        $pgnprop = [
            "searchcount"   => $searchcount,
            "pagenum"       => $pagenum,
            "lastpage"      => $lastpage,
        ];

        $paginatorsearch    = $this->paginatorSearch($table, $tblprop, $pgnprop);
        $pgnctrl            = $this->paginatorCtrl($pgnprop, $tblprop);

        // array('res' => $res, 'max' =>  $textline1, 'current' => $textline2, 'ctrl' => $pagenationrow);
        $paginator = [
            'tableres'      => $paginatorsearch,
            'max'           => $pgnctrl['max'],
            'current'       => $pgnctrl['current'],
            'pgnctrl'       => $pgnctrl['paginatorctrl'],
        ];

        // $session->set("pgnprop", $pgnprop);
        // $session->set("paginator", $paginator);


        return $paginator;
    }

    /**
    * Utför sökning som skall ge resultat som visas upp. Tar hänsyn till sökning, sortering och limit pga pages
    *
    * @param string $table tabellen som sökes emot
    * @param array $tblprop information om sökning ['searchcolumn' => , 'search' => , 'pages' =>, 'orderby' =>, 'orderas' =>]
    * @param array $pgnprop paginatorprop ['searchcount' => totala antalet rader i tabell, 'pagenum' => nuvarande sida, 'lastpage' => antalet sidor]
    *
    * @return object $res resultatet av sökningen
    */
    public function paginatorSearch($table, $tblprop, $pgnprop)
    {
        $deleteColumn = (isset($tblprop['deleteColumn'])) ? $tblprop['deleteColumn'] : "deleted";

        $search     = "WHERE " . $deleteColumn ." IS NULL AND ".$tblprop['searchcolumn']." LIKE ? ";
        $order      = 'ORDER BY '.$tblprop['orderby']." ".$tblprop['orderas']." ";
        $limit      = 'LIMIT '.($pgnprop['pagenum'] - 1 ) * $tblprop['pages'].', '.$tblprop['pages'];

        //---------------------------------------------------------

        $sql = "SELECT * FROM $table $search $order $limit";
        $params = ['%'.$tblprop['search'].'%'];
        $res = DB::select($sql, $params);
        return $res;
    }

    /**
    * Bygger upp en paginators kontroll för att byta sida.
    *
    * @param array $pgnprop paginatorproporties ['searchcount' => totala antalet rader i tabell, 'pagenum' => nuvarande sida, 'lastpage' => antalet sidor]
    *
    * @return string $paginatorctrl, kontrollern för att byta sida i paginerad tabell.
    */
    public function paginatorCtrl($pgnprop, $tblprop)
    {
        $textline1 = "Object (".$pgnprop['searchcount'].")";
        $textline2 = "Page ".$pgnprop['pagenum']." out of ".$pgnprop['lastpage'];

        $paginatorctrl = "<ul class='pagination'>";
        if ($pgnprop['lastpage'] != 1) {
            $paginatorctrl = $this->paginatorLeftCtrl($pgnprop['pagenum'], $paginatorctrl, $tblprop);
            $paginatorctrl .= "<li><a class='paginatoractive'>".$pgnprop['pagenum']."</a></li>";
            $paginatorctrl = $this->paginatorRightCtrl($pgnprop['pagenum'], $pgnprop['lastpage'], $paginatorctrl, $tblprop);
        }
        $paginatorctrl .= "</ul>";

        $pgnctrl = [
            "paginatorctrl"     => $paginatorctrl,
            "max"               => $textline1,
            "current"           => $textline2,
        ];

        return $pgnctrl;
    }

    /**
    * Generate leftside of the paginator for a table
    *
    * @param integer $pagenum page number.
    * @param string $paginatorctrl first part of the paginator
    *
    * @return string $pagenationrow first part of the paginator with added content
    */
    private function paginatorLeftCtrl($pagenum, $paginatorctrl, $tblprop)
    {
        if ($pagenum > 1) {
            $previous = $pagenum - 1;
            // $url = $_SERVER['PHP_SELF'].'?pn='.$previous;
            $url = url()->current().'?pn='.$previous.'&search='.$tblprop['search'].'&searchcolumn='.$tblprop['searchcolumn'].'&pages='.$tblprop['pages'].'&orderby='.$tblprop['orderby'].'&orderas='.$tblprop['orderas'];
            // $url = $fullurl.'?pn='.$previous;
            $paginatorctrl .= "<li><a href='$url'>" .htmlspecialchars("<<"). "</a></li>";

            if ($pagenum-4 > 0) {
                $paginatorctrl .= '<li><a>...</a></li>';
            }
            for ($i = $pagenum-3; $i < $pagenum; $i += 1) {
                if ($i > 0) {
                    // $url = $_SERVER['PHP_SELF'].'?pn='.$i;
                    $url = url()->current().'?pn='.$i.'&search='.$tblprop['search'].'&searchcolumn='.$tblprop['searchcolumn'].'&pages='.$tblprop['pages'].'&orderby='.$tblprop['orderby'].'&orderas='.$tblprop['orderas'];
                    $paginatorctrl .= "<li><a href='$url'>".$i."</a></li>";
                }
            }
        }
        return $paginatorctrl;
    }

    /**
    * Generate right side of the paginator for a table
    *
    * @param integer $pagenum page number.
    * @param integer $lastpage lastpage for the paginator
    * @param string $paginatorctrl first part of the paginator containing left side
    * @return string $paginationrow containing left side and now also right side of paginator
    */
    private function paginatorRightCtrl($pagenum, $lastpage, $paginatorctrl, $tblprop)
    {
        for ($i = $pagenum+1; $i <= $lastpage; $i += 1) {
            if ($i < $pagenum+4) {
                // $url = $_SERVER['PHP_SELF'].'?pn='.$i;
                $url = url()->current().'?pn='.$i.'&search='.$tblprop['search'].'&searchcolumn='.$tblprop['searchcolumn'].'&pages='.$tblprop['pages'].'&orderby='.$tblprop['orderby'].'&orderas='.$tblprop['orderas'];
                $paginatorctrl .= "<li><a href='$url'>".$i."</a></li>";
            } else if ($i == $pagenum+4) {
                $paginatorctrl .= '<li><a>...</a></li>';
            } else if ($i >= $pagenum+4) {
                break;
            }
        }
        if ($pagenum != $lastpage) {
            // var_dump($pagenum);
            $next = $pagenum + 1;
            // $paginatorctrl .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$next."> ' .htmlspecialchars(">>"). ' </a></li>';
            $paginatorctrl .= '<li><a href="'.url()->current().'?pn='.$next.'&search='.$tblprop['search'].'&searchcolumn='.$tblprop['searchcolumn'].'&pages='.$tblprop['pages'].'&orderby='.$tblprop['orderby'].'&orderas='.$tblprop['orderas'].'"> ' .htmlspecialchars(">>"). ' </a></li>';
        }
        return $paginatorctrl;
    }

}
