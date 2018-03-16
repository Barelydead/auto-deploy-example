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
}
