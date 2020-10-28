<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\history_of_d_n_sg;
use App\models\history_scj;
use App\models\history_scj_jud;
use App\models\history_scj_gurd;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['histories'] = history_of_d_n_sg::all();

        return view('admin.history.history_of_d_n_sg.index')->with($data);
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
        history_of_d_n_sg::create($request->all());

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
        $history = history_of_d_n_sg::find($id);
        return view('admin.history.history_of_d_n_sg.edit', compact('history'));
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
        $history_of_d_n_sg = history_of_d_n_sg::find($id);
        $history_of_d_n_sg->name_of_officer =  $request->name_of_officer;
        $history_of_d_n_sg->from = $request->from;
        $history_of_d_n_sg->to = $request->to;
        $history_of_d_n_sg->save();

        return redirect('admin/history')
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
        $history_of_d_n_sg = history_of_d_n_sg::find($id);
        $history_of_d_n_sg->delete();

        return back()
            ->with('success', 'Data Deleted Successfully');
    }

    /** History of SCJ Admin  */

    public function history_scj()
    {
        $histories = history_scj::all();
        return view('admin.history.history_scj.index', compact('histories'));
    }
    public function scj_store(Request $request)
    {
        history_scj::create($request->all());

        return back()
            ->with('success', 'Data Inserted Successfully');
    }
    public function scj_delete($id)
    {
        $history_scj = history_scj::find($id);
        $history_scj->delete();

        return back()
            ->with('success', 'Data Delete Successfully');
    }
    public function scj_edit($id)
    {
        $history = history_scj::find($id);
        return view('admin.history.history_scj.edit', compact('history'));
    }
    public function scj_update(Request $request, $id)
    {
        $history_scj = history_scj::find($id);
        $history_scj->name_of_officer =  $request->name_of_officer;
        $history_scj->from = $request->from;
        $history_scj->to = $request->to;
        $history_scj->save();

        return redirect('admin/history_scj')
            ->with('success', 'Data Updated Successfully');
    }

    /** History of SCJ Judicail  */

    public function history_scj_jud()
    {
        $histories = history_scj_jud::all();
        return view('admin.history.history_scj_jud.index', compact('histories'));
    }
    public function scj_store_jud(Request $request)
    {
        history_scj_jud::create($request->all());

        return back()
            ->with('success', 'Data Inserted Successfully');
    }
    public function scj_delete_jud($id)
    {
        $history_scj_jud = history_scj_jud::find($id);
        $history_scj_jud->delete();

        return back()
            ->with('success', 'Data Delete Successfully');
    }
    public function scj_edit_jud($id)
    {
        $history = history_scj_jud::find($id);
        return view('admin.history.history_scj_jud.edit', compact('history'));
    }
    public function scj_update_jud(Request $request, $id)
    {
        $history_scj_jud = history_scj_jud::find($id);
        $history_scj_jud->name_of_officer =  $request->name_of_officer;
        $history_scj_jud->from = $request->from;
        $history_scj_jud->to = $request->to;
        $history_scj_jud->save();

        return redirect('admin/history_scj_jud')
            ->with('success', 'Data Updated Successfully');
    }

    /** History of SCJ Guardian  */

    public function history_scj_gurd()
    {
        $histories = history_scj_gurd::all();
        return view('admin.history.history_scj_gurd.index', compact('histories'));
    }
    public function scj_store_gurd(Request $request)
    {
        history_scj_gurd::create($request->all());

        return back()
            ->with('success', 'Data Inserted Successfully');
    }
    public function scj_delete_gurd($id)
    {
        $history_scj_gurd = history_scj_gurd::find($id);
        $history_scj_gurd->delete();

        return back()
            ->with('success', 'Data Delete Successfully');
    }
    public function scj_edit_gurd($id)
    {
        $history = history_scj_gurd::find($id);
        return view('admin.history.history_scj_gurd.edit', compact('history'));
    }
    public function scj_update_gurd(Request $request, $id)
    {
        $history_scj_gurd = history_scj_gurd::find($id);
        $history_scj_gurd->name_of_officer =  $request->name_of_officer;
        $history_scj_gurd->from = $request->from;
        $history_scj_gurd->to = $request->to;
        $history_scj_gurd->save();

        return redirect('admin/history_scj_gurd')
            ->with('success', 'Data Updated Successfully');
    }
}
