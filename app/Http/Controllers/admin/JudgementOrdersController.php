<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;

class JudgementOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judges = DB::table('judgement_orders')->get();

        $all_judges = [];
        $history_of_d_n_sgs = DB::table('history_of_d_n_sgs')->get();
        foreach ($history_of_d_n_sgs as $his_sgs) {
            $all_judges[] = $his_sgs->name_of_officer;
        }

        $history_scjs = DB::table('history_scjs')->get();
        foreach ($history_scjs as $his_scjs) {
            $all_judges[] = $his_scjs->name_of_officer;
        }

        $history_scjs = DB::table('history_scj_gurds')->get();
        foreach ($history_scjs as $his_gurds) {
            $all_judges[] = $his_gurds->name_of_officer;
        }

        $history_scjs = DB::table('history_scj_juds')->get();
        foreach ($history_scjs as $his_juds) {
            $all_judges[] = $his_juds->name_of_officer;
        }

        return view('admin.history.judgement_orders.index')
            ->with('judgement', $judges)
            ->with('all_judges', $all_judges);
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
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/judge_images'), $imageName);

        DB::table('judgement_orders')->insert([
            'file' => 'public/uploads/judge_images/' . $imageName,
            'option' => $request->option,
            'judge_name' => $request->judge_name,
            'category' => $request->category,
            'date' => $request->date,
            'tagline' => $request->tagline,
            'party_one' => $request->party_one,
            'party_two' => $request->party_two,
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
        $all_judges = [];
        $history_of_d_n_sgs = DB::table('history_of_d_n_sgs')->get();
        foreach ($history_of_d_n_sgs as $his_sgs) {
            $all_judges[] = $his_sgs->name_of_officer;
        }

        $history_scjs = DB::table('history_scjs')->get();
        foreach ($history_scjs as $his_scjs) {
            $all_judges[] = $his_scjs->name_of_officer;
        }

        $history_scjs = DB::table('history_scj_gurds')->get();
        foreach ($history_scjs as $his_gurds) {
            $all_judges[] = $his_gurds->name_of_officer;
        }

        $history_scjs = DB::table('history_scj_juds')->get();
        foreach ($history_scjs as $his_juds) {
            $all_judges[] = $his_juds->name_of_officer;
        }

        $judges = DB::table('judgement_orders')->where('id', $id)->first();

        return view('admin.history.judgement_orders.edit')
            ->with('judgement', $judges)
            ->with('all_judges', $all_judges);
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

            $imageName = time() . '.' . $request->file->extension();

            $request->file->move(public_path('uploads/judge_images'), $imageName);

            $newImage = 'public/uploads/judge_images/' . $imageName;
        } else {
            $newImage = $request->old_file;
        }

        DB::table('judgement_orders')->where('id', $id)->update([
            'file' => $newImage,
            'option' => $request->option,
            'judge_name' => $request->judge_name,
            'category' => $request->category,
            'date' => $request->date,
            'tagline' => $request->tagline,
            'party_one' => $request->party_one,
            'party_two' => $request->party_two,
        ]);
        return \Redirect::route('judgemental.index')->with('success', 'Updated Succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('judgement_orders')->delete($id);

        return back()
            ->with('success', 'Record Deleted Successfully');
    }
}
