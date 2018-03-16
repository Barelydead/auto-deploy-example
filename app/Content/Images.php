<?php

namespace App\Content;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'content_images';

    public function getImagesByContentId($contentId)
    {
        return $this->where('content_id LIKE ?', $contentId)
                    ->get();
    }


    public function getImagesByContentCategory($category)
    {
        return $this->join('content', 'content_images.content_id', '=', 'content.id')
                    ->select('content_images.*', 'content.category')
                    ->where('content.category', 'LIKE', $category)
                    ->get();
    }
}
