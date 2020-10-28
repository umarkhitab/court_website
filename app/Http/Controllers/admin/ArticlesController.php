<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $published_articles = DB::table('published_articles')->orderBy('id', 'desc')->get();
        return view('admin.articles.index', compact('published_articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');

        //you also need to keep file extension as well
        $name = $file->getClientOriginalName();

        //using the array instead of object
        $file->move(public_path() . '/uploads/petition_images/', $name);

        DB::table('published_articles')->insert([
            'link' => asset('public/uploads/petition_images/'.$name),
            'title' => $request->title,
            'author' => $request->author,
        ]);

        return back()
            ->with('success', 'Data Inserted Successfully');
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
        $article = DB::table('published_articles')->where('id', '=', $id)->first();

        return view('admin.articles.edit', compact('article'));
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
        if ($request->hasFile('file')) {

            $file = $request->file('file');

            //you also need to keep file extension as well
            $name = $file->getClientOriginalName();

            //using the array instead of object
            $file->move(public_path() . '/uploads/petition_images/', $name);
        } else {
            $name = $request->oldfile;
        }

        DB::table('published_articles')->where('id', '=', $id)->update([
            'link' => asset('public/uploads/petition_images/'.$name),
            'title' => $request->title,
            'author' => $request->author,
        ]);

        return back()
            ->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('published_articles')->where('id', '=', $id)->delete();

        return back()
            ->with('success', 'Recored Deleted Successfully');
    }
}