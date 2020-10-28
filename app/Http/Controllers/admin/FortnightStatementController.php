<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FortnightStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fortnight = DB::table('periodical_cat as a')
            ->select('b.id as for_id', 'a.*', 'b.*')
            ->join('fortnightstatemnt as b', 'b.cat_id', '=', 'a.id')->get();

        $links = DB::table('periodical_cat')->get();

        return view('admin.history.periodical_statements.index')
            ->with('fortnight', $fortnight)
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

        DB::table('fortnightstatemnt')->insert([
            'cat_id' => $request->cat_id,
            'description' => $request->type,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'file' => 'public/uploads/banners/' . $imageName,
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
        $for = DB::table('fortnightstatemnt')->where('id', $id)->first();
        $links = DB::table('periodical_cat')->get();

        return view('admin.history.periodical_statements.edit')
            ->with('for', $for)
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

        DB::table('fortnightstatemnt')->where('id', $id)->update([
            'cat_id' => $request->cat_id,
            'description' => $request->type,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'file' => $newImage,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return \Redirect::route('fortnightly.index')->with('success', 'Updated Succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('fortnightstatemnt')->delete($id);

        return back()
            ->with('success', 'Deleted Successfully.');
    }
}
