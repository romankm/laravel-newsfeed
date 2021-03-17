<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.news_items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:4',
        ]);

//        $newsItem = new NewsItem;
//        $newsItem->title = request('title');
//        $newsItem->body = request('body');
//        $newsItem->save();
        NewsItem::create($request->all());

//         dd(request('title'));
//        return back();
//        return redirect()->route('newsItems.index')->with()
        return redirect()->route('newsItems.index')->with('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
