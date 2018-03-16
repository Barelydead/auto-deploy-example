<?php

namespace App\Content;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    /**
     * This is the table name
     *
     * @var string
     */
    protected $table = 'content';


    /**
     * substring search in tablerows content, title and category.
     *
     * @param string
     * @return array
     */
    public function searchTable($search)
    {
        return $this->whereRaw('content LIKE ?', ["%$search%"])
                    ->orWhereRaw('title LIKE ?', ["%$search%"])
                    ->orWhereRaw('category LIKE ?', ["%$search%"])
                    ->get();
    }



    /**
     * Get articles by category.
     *
     * @param string $category
     * @return array
     */
    public function getArticlesByCategory($category)
    {
        return $this->where('category', 'LIKE', $category)
                    ->get();
    }
}
