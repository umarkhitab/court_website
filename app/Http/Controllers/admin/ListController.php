<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('list')->orderBy('id','desc')->get();
        return view('admin.list.index')->with('lists',$list);
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
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('uploads/list_images'), $imageName);

        DB::table('list')->insert([
            'image' => 'uploads/list_images/' . $imageName,
            'desc' => $request->message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return back()
            ->with('success', 'New Item Added to List.');
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
        $list = DB::table('list')->where('id', $id)->first();
        return view('admin.list.edit')->with('list', $list);
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
        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('uploads/list_images'), $imageName);

            $newImage = 'uploads/list_images/' . $imageName;
        } else {
            $newImage = $request->old_file;
         }

        DB::table('list')->where('id',$id)->update([
            'image' => $newImage,
            'desc' => $request->message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return \Redirect::route('list.index')->with('message', 'List Updated Succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('list')->delete($id);

        return back()
            ->with('success', 'Item Deleted from List Successfully.');
    }
}
