<?php

namespace App\Gallery;

/**
 * Gallery class to generate HTML for pictures
 *
 */
class Gallery
{

    private $rows;
    private $columns;
    private $sizes = ["content-small", "content-medium", "content-large"];
    private $images = [];
    private $sizeIndex = [];

    public function __construct(Int $rows = 4, Int $columns = 5)
    {
        $this->rows = $rows;
        $this->columns = $columns;

        $this->generateSizes();
    }


    /**
     * init the class with images to use
     *
     * @param Array $images
     * @return void
     */
    public function init($images) {
        foreach ($images as $img) {
            array_push($this->images, "/img/upload/" . $img->filename);
        }
        shuffle($this->images);
    }

    /**
     * Generate random the random sizes
     *
     * @return Void
     */
    public function generateSizes()
    {
        $this->sizeIndex = [];
        for ($i= 0; $i < $this->columns; $i++) {
            array_push($this->sizeIndex, rand(0, 2));
        }
    }


    /**
     * Get HTML for a column
     *
     * @return String
     */
    public function getColumn() {
        $html = "";
        shuffle($this->sizeIndex);

        for ($i = 0; $i < $this->columns; $i++) {
            $image = asset(array_pop($this->images));
            $index = $this->sizeIndex[$i];

            $html .= "<div class='item'>
                <div class='mason-content " . $this->sizes[$index] . "'>
                    <img src='$image' class='gallery-thumb img-responsive'>
                </div>
            </div>";
        }

        return $html;
    }


    /**
     * Get HTML for complete grid
     *
     * @return return String
     */
    public function getHtmlGrid() {
        $html = "";

        for ($i = 0; $i < $this->rows; $i++) {
            $column = $this->getColumn();

            $html .= "<div class='mrow mrow-$i'>
                    $column
                </div>";
        }

        return $html;
    }
}
