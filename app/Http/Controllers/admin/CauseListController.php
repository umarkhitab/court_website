<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CauseListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cause_list = DB::table('judicial_officers as a')
            ->select('b.id as c_id', 'a.*', 'b.*')
            ->join('cause_list as b', 'b.judge_id', '=', 'a.id')->get();

        $officers = DB::table('judicial_officers')->get();
        // dd($cause_list);
        return view('admin.history.cause_list.index')
            ->with('cause_list', $cause_list)
            ->with('officers', $officers);
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

        DB::table('cause_list')->insert([
            'date' => $request->date,
            'judge_id' => $request->judge_id,
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
        $cause = DB::table('cause_list')->where('id', $id)->first();
        $officers = DB::table('judicial_officers')->get();

        return view('admin.history.cause_list.edit')
            ->with('cause', $cause)
            ->with('officers', $officers);
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

        DB::table('cause_list')->where('id', $id)->update([
            'date' => $request->date,
            'judge_id' => $request->judge_id,
            'file' => $newImage,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return \Redirect::route('causelist.index')->with('success', 'Updated Succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('cause_list')->delete($id);

        return back()
            ->with('success', 'Deleted Successfully.');
    }

    public function police_station()
    {
        $police_station = DB::table('police_station')->get();

        return view('admin.history.cause_list.police_station')->with('police_station', $police_station);
    }
    public function add_police_station(Request $request)
    {
        DB::table('police_station')->insert([
            'police_station_name' => $request->station,
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function delete_police_station($id)
    {
        DB::table('police_station')->delete($id);

        return back()
            ->with('success', 'Deleted Successfully.');
    }
    public function fir()
    {
        $fir = DB::table('police_station as a')
            ->select('b.id as per_fir', 'a.*', 'b.*')
            ->join('person_fir as b', 'b.police_station_id', '=', 'a.id')->get();

        $police_station = DB::table('police_station')->get();

        return view('admin.history.cause_list.firs')
            ->with('fir', $fir)
            ->with('police_station', $police_station);
    }
    public function add_fir(Request $request)
    {
        DB::table('person_fir')->insert([
            'police_station_id' => $request->police_station,
            'name' => $request->per_name,
            'fir_no' => $request->fir_no,
            'date' => $request->date,
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function delete_fir($id)
    {
        DB::table('person_fir')->delete($id);

        return back()
            ->with('success', 'Deleted Successfully.');
    }
}
