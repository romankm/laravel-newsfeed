<?php

namespace App\Http\Controllers;

use App\Category;
use App\NewsItem;
use Illuminate\Http\Request;

class NewsItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $newsItemsBuilder = NewsItem::with('category:id,name')
            ->orderBy('created_at', 'desc');
        $filterCategory = $request->get('category');

        if ($filterCategory) {
            $newsItemsBuilder->where('category_id', '=', $filterCategory);
        }

        $newsItems = $newsItemsBuilder->get();
        $categories = Category::all();

        return view('news_items.index', [
            'newsItems' => $newsItems,
            'categories' => $categories,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newsItem = NewsItem::find($id);

        return view('news_items.show', compact('newsItem'));
    }
}
