<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function newsItems($method, $parameters)
    {
        return $this->hasMany(NewsItem::class);
    }
}
