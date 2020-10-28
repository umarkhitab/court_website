<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraries = DB::table('library')->orderBy('id', 'desc')->get();
        return view('admin.library.index', compact('libraries'));
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

        DB::table('library')->insert([
            'file' => asset('public/uploads/petition_images/'.$name),
            'title' => $request->folder_name,
            'serial_no' => $request->serial,
            // 'type' => $request->type,
            // 'auther' => $request->author,
            // 'subject' => $request->subject,
            // 'pages' => $request->pages,
            // 'publish_date' => $request->publish_date,
            // 'publisher' => $request->publisher,
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
        $library = DB::table('library')->where('id', '=', $id)->first();

        return view('admin.library.edit', compact('library'));
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

            $newfile = asset('public/uploads/petition_images/'.$name);
        } else {
            $newfile = $request->oldfile;
        }

        DB::table('library')->where('id','=',$id)->update([
            'file' => $newfile,
            'title' => $request->folder_name,
            'serial_no' => $request->serial,
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
        DB::table('library')->where('id', '=', $id)->delete();

        return back()
            ->with('success', 'Recored Deleted Successfully');
    }
}
