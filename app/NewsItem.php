<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
