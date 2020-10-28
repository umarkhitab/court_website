<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class HistoryController extends Controller
{
    public function index()
    {
        return view('frontend.history.history');
    }
    public function history_dsj()
    {
        $history = DB::table('history_of_d_n_sgs')->get();
        return view('frontend.history.history_dsj')->with('history', $history);
    }
    public function history_scjs()
    {
        $history = DB::table('history_scjs')->get();
        return view('frontend.history.history_scjs')->with('history', $history);
    }
    public function history_scj_juds()
    {
        $history = DB::table('history_scj_juds')->get();
        return view('frontend.history.history_scj_juds')->with('history', $history);
    }
    public function history_scj_gurds()
    {
        $history = DB::table('history_scj_gurds')->get();
        return view('frontend.history.history_scj_gurds')->with('history', $history);
    }
    public function links($type)
    {   
        session(['type' => $type]);
        $links = DB::table('judicial_officers_links')->get();
        return view('frontend.judicail_officers.links')->with('links', $links);
    }
    public function judicail_officer($id)
    {
        $judicial_officers = DB::table('judicial_officers_links as a')
            ->select('b.id as officer_id', 'a.*', 'b.*')
            ->join('judicial_officers as b', 'b.jud_officers_id', '=', 'a.id')
            ->where('a.id', '=', $id)
            ->get();
        return view('frontend.judicail_officers.list_judicail_officers')->with('officers', $judicial_officers);
    }
    public function cat_staff_links()
    {
        $links = DB::table('staff_links')->get();
        return view('frontend.court_staff.links')->with('links', $links);
    }
    public function cat_staff($id)
    {
        $staff = DB::table('staff_links as a')
            ->select('b.id as staff_id', 'a.*', 'b.*')
            ->join('staff as b', 'b.staff_link_id', '=', 'a.id')
            ->where('a.id', '=', $id)
            ->get();

        return view('frontend.court_staff.court_staff')->with('staff', $staff);
    }
    public function court_staff()
    {
        $links = DB::table('court_staff')->get();
        return view('frontend.court_staff.court_links')->with('links', $links);
    }
    public function cause_list()
    {
        $judge = DB::table('judicial_officers')->get();

        return view('frontend.cuase_list.index')->with('judge', $judge);
    }
    public function get_cause_list(Request $request)
    {
        $judge = $request->judge;
        $date = $request->date;

        $staff = DB::table('judicial_officers as a')
            ->join('cause_list as b', 'b.judge_id', '=', 'a.id')
            ->where('b.judge_id', '=', $judge)
            ->where('b.date', '=', $date)
            ->get();

        $judge = DB::table('judicial_officers')->get();

        return view('frontend.cuase_list.index')
            ->with('judge', $judge)
            ->with('staff', $staff);
    }
    public function notifications()
    {
        $notifications = DB::table('notifications')->get();

        return view('frontend.notifications.links')
            ->with('notifications', $notifications);
    }
    public function jobs()
    {
        $jobs = DB::table('job')->get();

        return view('frontend.jobs.index')
            ->with('jobs', $jobs);
    }
    public function picture_gallery_title()
    {
        $picture_gallery = DB::table('picture_gallery')->get();

        return view('frontend.picture_gallery.links')
            ->with('pictures', $picture_gallery);
    }
    public function get_pic_gall($id)
    {
        $picture_gallery = DB::table('picture_gallery')->where('id', '=', $id)->first();
        // dd($picture_gallery);

        return view('frontend.picture_gallery.index')
            ->with('picture_gallery', $picture_gallery);
    }

    public function video_gallery_title()
    {
        $picture_gallery = DB::table('video_gallery')->get();

        return view('frontend.video_gallery.links')
            ->with('links', $picture_gallery);
    }
    
    public function get_video_gallery_title($title)
    {
        $videos = DB::table('video_gallery')->where('title', '=', $title)->first();

        return view('frontend.video_gallery.index')
            ->with('videos', $videos);
    }
    public function downloads()
    {
        $downloads = DB::table('downloads')->get();

        return view('frontend.downloads.links')
            ->with('downloads', $downloads);
    }
    public function fortightly_statements()
    {
        $periodical_cat = DB::table('periodical_cat')->get();

        return view('frontend.fortightly_statements.index')
            ->with('periodical_cat', $periodical_cat);
    }
    public function get_fortightly(Request $request)
    {
        $cat = $request->cat;
        $date = $request->date;
        
        $statments = DB::table('fortnightstatemnt')
            ->where('cat_id', '=', $cat)
            ->whereYear('from_date', '=', $date)
            ->where('description', '=', 'Fortnight Statements')
            ->get();

        $periodical_cat = DB::table('periodical_cat')->get();

        return view('frontend.fortightly_statements.index')
            ->with('statments', $statments)
            ->with('periodical_cat', $periodical_cat);
    }
    public function monthly_statements()
    {
        $periodical_cat = DB::table('periodical_cat')->get();

        return view('frontend.fortightly_statements.monthly_statement')
            ->with('periodical_cat', $periodical_cat);
    }
    public function get_monthly(Request $request)
    {
        $cat = $request->cat;
        $date = date('Y', strtotime($request->date));

        $statments = DB::table('fortnightstatemnt')
            ->where('id', '=', $cat)
            ->whereYear('from_date', '=', $date)
            ->where('description', '=', 'Monthly Statements')
            ->get();

        $periodical_cat = DB::table('periodical_cat')->get();

        return view('frontend.fortightly_statements.monthly_statement')
            ->with('statments', $statments)
            ->with('periodical_cat', $periodical_cat);
    }
    public function case_managment()
    {
        return view('frontend.case_managment.index');
    }

    public function fir()
    {
        $police_station = DB::table('police_station')->get();

        return view('frontend.fir.fir')
            ->with('police_station', $police_station);
    }
    public function get_fir(Request $request)
    {
        $station = $request->station;
        $fir_no = $request->fir_no;
        $date =  $request->date;

        $fir = DB::table('police_station as a')
            ->select('b.id as per_fir', 'a.*', 'b.*')
            ->join('person_fir as b', 'b.police_station_id', '=', 'a.id')
            ->where('police_station_id', '=', $station)
            ->where('fir_no', '=', $fir_no)
            ->where('date', '=', $date)
            ->get();

        $police_station = DB::table('police_station')->get();

        return view('frontend.fir.fir')
            ->with('fir', $fir)
            ->with('police_station', $police_station);
    }
    public function profile($id)
    {
        $officers = DB::table('judicial_officers')
                        ->where('id', '=', $id)
                        ->first();

        // if ($id != 10) {
        //     return view('frontend.judicail_officers.profile')
        //         ->with('officer', $officers);
        // } else {
            return view('frontend.judicail_officers.profile')
                ->with('officer', $officers);
        // }
    }
    public function judgement_orders()
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

        $category = DB::table('judgement_orders')->select('category')->groupBy('category')->get();

        return view('frontend.judgement_orders.index')
                ->with('judge_name', $all_judges)
                ->with('category', $category);
    }
    public function get_judgement_orders(Request $request)
    {
        $data = DB::table('judgement_orders')->Where('judge_name', '=', $request->judge)->get();

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

        $category = DB::table('judgement_orders')->select('category')->groupBy('category')->get();

        return view('frontend.judgement_orders.index')
            ->with('judge_name', $all_judges)
            ->with('category', $category)
            ->with('data', $data);
    }
    public function related_links()
    {
        return view('frontend.related_links');
    }
    public function overseas_pakistan()
    {
        return view('frontend.oversease');
    }
    public function library()
    {
        $libraries = DB::table('library')->orderBy('id','desc')->get();
        return view('frontend.library')->with('libraries',$libraries);
    }
    public function published_articels(){
        $articles = DB::table('published_articles')->orderBy('id','desc')->get();
        return view('frontend.pub_articles')->with('articles',$articles);
    }
}
