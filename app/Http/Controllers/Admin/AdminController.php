<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Paginator\Paginator as Paginator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return view("Admin/index");
    }

    // public function getContent($category)
    // {
    //     $content = DB::select('select * from content WHERE category LIKE ?', [$category]);
    //     return view("Admin/content/viewcontent", ["content" => $content, "category" => $category]);
    // }

    public function getContent(Request $request, $category)
    {
        $paginator = new Paginator();

        /*---------------------------------------------*/

        $tblprop = [
            "pages"         => ($request->get('pages') != null) ? htmlentities($request->get('pages')) : 2,
            "searchcolumn"  => ($request->get('searchcolumn') != null) ? htmlentities($request->get('searchcolumn')) : 'category',
            "search"        => ($request->get('search') != null) ? htmlentities($request->get('search')) : $category,
            "orderby"       => ($request->get('orderby') != null) ? htmlentities($request->get('orderby')) : 'id',
            "orderas"       => ($request->get('orderas') != null) ? htmlentities($request->get('orderas')) : 'ASC',
        ];
        $pagenum            = ($request->get('pn')) ? preg_replace('#[^0-9]#', '', $request->get('pn')) : 1;

        /*---------------------------------------------*/

        $tableHTML    = $paginator->paginator('content', $tblprop, $pagenum);

        /*---------------------------------------------*/

        $data = [
            "tableHTML"     => $tableHTML,
            "category"      => $category
        ];

        return view("Admin/content/viewcontent", $data);
    }

    public function editContent($id)
    {
        $content = DB::select('select * from content WHERE id LIKE ?', [$id]);
        return view("Admin/content/edit", ["content" => $content]);
    }

    public function editContentProcess(Request $request)
    {
        $data['id'] = $request->post('id');
        $data['category'] = $request->post('category');
        $data['title'] = $request->post('title');
        $data['content'] = $request->post('content');

        /*--------------------------------------------*/

        if(isset($_POST['editbtn'])) {
            DB::table('content')
                ->where('id', $data['id'])
                ->update([
                    'title'     => $data['title'],
                    'content'   => $data['content']
                ]);
        }

        $returnurl = "admin/content/".$data['category'];
        return redirect($returnurl);
    }

    public function addContent()
    {
        return view("admin/content/add");
    }

    public function addContentProcess(Request $request)
    {
        $data['type'] = $request->post('type');
        $data['category'] = $request->post('category');
        $data['subcategory'] = $request->post('subcategory');
        $data['title'] = $request->post('title');
        $data['content'] = $request->post('content');
        $data['author'] = $request->post('author');

        /*--------------------------------------------*/

        DB::table('content')->insert(
            [
                'type' => $data['type'],
                'category' => $data['category'],
                'subcategory' => $data['subcategory'],
                'title' => $data['title'],
                'content' => $data['content'],
                'author' => $data['author']
            ]);

            $returnurl = "admin/content/".$data['category'];
            return redirect($returnurl);
    }
}
