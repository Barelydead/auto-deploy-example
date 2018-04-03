<?php

namespace App\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Images extends Model
{
    use SoftDeletes;
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'content_images';
    protected $dates = ['deleted_at'];

    public function getImagesByContentId($contentId)
    {
        return $this->where('content_id', 'LIKE', $contentId)
                    ->get();
    }


    public function getImagesByContentCategory($category)
    {
        return $this->join('content', 'content_images.content_id', '=', 'content.id')
                    ->select('content_images.*', 'content.category')
                    ->where('content.category', 'LIKE', $category)
                    ->get();
    }

    public function getImage($imageId)
    {
        return $this->find($imageId);
    }
}
