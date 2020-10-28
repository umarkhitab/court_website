<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = DB::table('staff_links as a')
            ->select('b.id as staff_id', 'a.*', 'b.*')
            ->join('staff as b', 'b.staff_link_id', '=', 'a.id')->get();

        $links = DB::table('staff_links')->get();

        return view('admin.history.staff.index')
            ->with('staff', $staff)
            ->with('links', $links);
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

        $request->image->move(public_path('uploads/banners'), $imageName);

        DB::table('staff')->insert([
            'details' => $request->details,
            'staff_link_id' => $request->link_id,
            'image' => 'public/uploads/banners/' . $imageName,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
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
        $staff = DB::table('staff')->where('id', $id)->first();
        $links = DB::table('staff_links')->get();

        return view('admin.history.staff.edit')
            ->with('staff', $staff)
            ->with('links', $links);
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

            $request->image->move(public_path('uploads/banners'), $imageName);

            $newImage = 'public/uploads/banners/' . $imageName;
        } else {
            $newImage = $request->old_image;
         }

        DB::table('staff')->where('id',$id)->update([
            'details' => $request->details,
            'staff_link_id' => $request->link_id,
            'image' => $newImage,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return \Redirect::route('staff.index')->with('message', 'Updated Succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('staff')->delete($id);

        return back()
            ->with('success', 'Deleted Successfully.');
    }
}
