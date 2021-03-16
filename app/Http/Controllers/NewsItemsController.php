<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsItem;

class NewsItemsController extends Controller
{
  public function list()
  {
      $newsItems = NewsItem::all();

      return view('news_items', [
          'newsItems' => $newsItems,
      ]);
  }
}
