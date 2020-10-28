<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\judicial_officers;
use App\models\JudicialOfficersLinks;
use DB;

class JudicialOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judicial_officers = DB::table('judicial_officers_links as a')
            ->select('b.id as officer_id', 'a.*', 'b.*')
            ->join('judicial_officers as b', 'b.jud_officers_id', '=', 'a.id')->get();
        $links = JudicialOfficersLinks::all();
        return view('admin.history.judicial_officers.index')
            ->with('judicial_officers', $judicial_officers)
            ->with('links', $links);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $links = JudicialOfficersLinks::all();

        return view('admin.history.judicial_officers.add')->with('links', $links);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->photo->extension();

        $request->photo->move(public_path('uploads/judge_images'), $imageName);

        DB::table('judicial_officers')->insert([
            'photo' => 'public/uploads/judge_images/'.$imageName,
            'jud_officers_id' => $request->jud_officers_id,
            'name_of_judges' => $request->name_of_judges,
            'dob' => $request->dob,
            'place_of_brith' => $request->place_of_brith,
            'qualification' => $request->qualification,
            'practice_period' => $request->practice_period,
            'service_detail' => $request->service_detail,
            'place_of_posting' => $request->place_of_posting,
            'honour' => $request->honour,
            'appreciation' => $request->appreciation,
            'courses_workshops' => $request->courses_workshops,
            'experience' => $request->experience,
            'skills' => $request->skills,
            'activities_and_achievments' => $request->activities_and_achievments,
            'Training_imparted' => $request->Training_imparted,
            'books_published' => $request->books_published,
            'books_to_be_publish' => $request->books_to_be_publish,
            'type' => $request->type,
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
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officer = judicial_officers::find($id);
        $links = JudicialOfficersLinks::all();
        return view('admin.history.judicial_officers.edit')
            ->with('officer', $officer)
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
        $judicial_officers = judicial_officers::find($id);
        $judicial_officers->name_of_judges =  $request->name;
        $judicial_officers->desgination_judge = $request->designation;
        $judicial_officers->jud_officers_id = $request->link_id;
        $judicial_officers->save();

        return redirect('admin/judofficers')
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
        $judicial_officers = judicial_officers::find($id);
        $judicial_officers->delete();

        return back()
            ->with('success', 'Data Delete Successfully');
    }
}
