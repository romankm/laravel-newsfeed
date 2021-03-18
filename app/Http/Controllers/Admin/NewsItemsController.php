<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\NewsItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsItems = NewsItem::select()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.news_items.index', [
            'newsItems' => $newsItems,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $newsItem = new NewsItem;

        return view('admin.news_items.create', compact('categories', 'newsItem'));
    }

    public function store(Request $request)
    {
        $data = $this->validateNewsItemData();

        NewsItem::create($data);

        return redirect('/admin/news-items');;
    }

    public function edit(NewsItem $newsItem)
    {
        $categories = Category::all();

        return view('admin.news_items.edit', compact('newsItem', 'categories'));
    }

    public function update(NewsItem $newsItem)
    {
        $data = $this->validateNewsItemData();

        $newsItem->update($data);
    }

    public function destroy(NewsItem $newsItem)
    {
        $newsItem->delete();

        return redirect('/admin/news-items');
    }

    protected function validateNewsItemData()
    {
        return request()->validate([
            'title'       => 'required|min:3',
            'body'        => 'required|min:4',
            'category_id' => 'required',
        ]);
    }

}
