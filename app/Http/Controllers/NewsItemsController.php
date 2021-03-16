<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsItem;

class NewsItemsController extends Controller
{
    public function list()
    {
        $newsItems = NewsItem::select()
          ->orderBy('created_at', 'desc')
          ->get();

        return view('news_items', [
            'newsItems' => $newsItems,
        ]);
    }

    public function create()
    {
        $data = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:4',
        ]);

        $newsItem = new NewsItem;
        $newsItem->title = request('title');
        $newsItem->body = request('body');
        $newsItem->save();

        // dd(request('title'));
        return back();
    }
}
