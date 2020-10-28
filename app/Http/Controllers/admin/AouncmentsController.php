<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AouncmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = DB::table('annoucments')->orderBy('id','desc')->get();
        return view('admin.announcments.index')->with('announcements',$announcements);
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

        $request->image->move(public_path('uploads/annoucments'), $imageName);

        DB::table('annoucments')->insert([
            'file' => 'uploads/annoucments/' . $imageName,
            'message' => $request->message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return back()
            ->with('success', 'You have successfully Added Annoucemnt.');
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
        $annoucments = DB::table('annoucments')->where('id', $id)->first();
        return view('admin.announcments.edit')->with('annouc', $annoucments);
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

            $request->image->move(public_path('uploads/judge_images'), $imageName);

            $newImage = 'uploads/judge_images/' . $imageName;
        } else {
            $newImage = $request->old_file;
         }

        DB::table('annoucments')->where('id',$id)->update([
            'file' => $newImage,
            'message' => $request->message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return \Redirect::route('announcement.index')->with('message', 'Annoucement Updated Succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('annoucments')->delete($id);

        return back()
            ->with('success', 'Annoucment Deleted Successfully.');
    }
}
