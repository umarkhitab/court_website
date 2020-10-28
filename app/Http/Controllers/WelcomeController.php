<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $annoucments = DB::table('annoucments')->orderBy('id','desc')->get();
        $list = DB::table('list')->get();
        $message = DB::table('sessions_judge_message')->first();
        $registrar_message = DB::table('registrar_message')->first();
        $chief_justice_message = DB::table('chief_justice_message')->first();
        $events = DB::table('events')->orderBy('id','desc')->get();
        

        return view('home')
                            ->with('annoucments',$annoucments)
                            ->with('lists',$list)
                            ->with('message',$message)
                            ->with('events',$events)
                            ->with('registrar_message',$registrar_message)
                            ->with('chief_justice_message',$chief_justice_message);
    }
    public function full_msg()
    {
        $message = DB::table('sessions_judge_message')->first();
        return view('full_msg')
                            ->with('message',$message);
    }
}
