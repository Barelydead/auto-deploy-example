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



    /**
     * Get images by content id.
     *
     * @param integer $contentId
     * @return void
     */
    public function getImagesByContentId($contentId)
    {
        return $this->where('content_id', 'LIKE', $contentId)
                    ->orderBy('region', 'asc')
                    ->get();
    }



    /**
     * Get images by content category
     *
     * @param string $category
     * @return void
     */
    public function getImagesByContentCategory($category)
    {
        return $this->join('content', 'content_images.content_id', '=', 'content.id')
                    ->select('content_images.*', 'content.category')
                    ->where('content.category', 'LIKE', $category)
                    ->get();
    }



    /**
     * Get image model
     *
     * @param integer $imageId
     * @return void
     */
    public function getImage($imageId)
    {
        return $this->find($imageId);
    }
}
