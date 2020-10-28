<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\User;
use Illuminate\Support\Facades\URL;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use DB;

class EfileController extends Controller
{
    public function index()
    {
        return view('frontend.e-filing.e-file-steps');
    }
    public function signupform()
    {
        return view('frontend.e-filing.signup');
    }
    public function signup(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'phone' => 'required',
        ]);

        $rand = rand(10, 100);

        $user = User::create([
            'name' => $rand,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone,
            'verfiy_token' => md5($rand),
        ]);

        Mail::send('emails.user-verify', ['link' => URL::route('verify-account', $user->verfiy_token)], function ($m) use ($user) {
            $m->from('sessionscourt.southwaziristan@gmail.com', 'Account Verification');

            $m->to($user->email)->subject('Verify Account');
        });

        return redirect()->back()->with('success', 'Your Account created Successfully, We have sent you verification email please verify your email');
    }
    public function verify_account($code)
    {
        if (!empty($code)) {
            User::where('verfiy_token', '=', $code)->update([
                'status' => 1
            ]);
        }

        return redirect()->route('sign-in', 'Your Account Verified Successfully');
    }
    public function sign_in()
    {
        return view('frontend.e-filing.login');
    }
    public function login_user(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return Redirect::to('user-e-file-dashboard')->withSuccess('LoggedIn Successfully!');
        }
    }
    public function user_e_file_dashboard()
    {
        $ids = DB::table('submmision_of_claim')->where('user_id', '=', Auth::user()->id)->get();

        $cases = DB::table('submmision_of_claim')
                ->join('users','users.id','=','submmision_of_claim.user_id')
                ->join('party_add_to_list','submmision_of_claim.e_file_id','=','party_add_to_list.e_file_id')
                ->where('users.id',Auth::user()->id)
                ->get();
        return view('frontend.e-filing.dashboard', compact('ids','cases'));
    }
    public function upload_files(Request $request)
    {

        if ($request->hasFile('file')) {

            $file = $request->file('file');

            // you also need to keep file extension as well
            $name = time() . $file->getClientOriginalName();

            // using the array instead of object
            $file->move(public_path() . '/uploads/e_files/', $name);
            $main_image = asset('public/uploads/e_files/' . $name);

            $rand = Str::random(5, 15);

            $user = Auth::user();

            $file = DB::table('submmision_of_claim')->insert([
                'user_id' => Auth::user()->id,
                'e_file_id' => $rand,
                'full_name' => $request->plain_fullname,
                'father_name' => $request->plain_fathername,
                'cnic' => $request->plain_cnic,
                'address' => $request->plain_address,
                'gender' => $request->plain_gender,
                'dob' => $request->plain_dob,
                'cell_number' => $request->plain_cell_number,
                'res_full_name' => $request->res_full_name,
                'res_father_name' => $request->res_fathername,
                'res_cnic' => $request->res_cnic,
                'res_dob' => $request->res_dob,
                'res_address' => $request->res_address,
                'res_gender' => $request->res_gender,
                'res_attach_claim_document' => $main_image,
                'res_case_nature' => $request->casenature,
                'status' => 'Pending',
            ]);

            Mail::send('emails.file', ['e_file_id' => $rand], function ($m) use ($user) {
                $m->from('sessionscourt.southwaziristan@gmail.com', $user->name);

                $m->to($user->email)->subject('File Uploaded Successfully');
            });

            Mail::send('emails.admin_e_file', ['user' => $user, 'number' => $rand], function ($m) use ($user) {
                $m->from('sessionscourt.southwaziristan@gmail.com', $user->name);

                $m->to('sessionscourt.southwaziristan@gmail.com')->subject('File Uploaded Successfully');
            });

            return Redirect::to('user-e-file-dashboard')->withSuccess('Your Claim Submitted Successfully Please Check your Email and Get Your E-File ID');
        }
        return Redirect::to("user-e-file-dashboard")->withErrors('Oppes! There is an Error while file uploading');
    }
    public function add_party_to_list(Request $request)
    {
        DB::table('party_add_to_list')->insert([
            'user_id' => Auth::user()->id,
            'e_file_id' => $request->e_file_id,
            'party' => $request->party,
            'fullname' => $request->full_name,
            'father_name' => $request->father_name,
            'cnic' => $request->cnic,
            'address' => $request->address,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'live_died' => $request->live_died,
            'cell' => $request->cell_number,
        ]);

        return redirect()->back()->withSuccess('New Party Added Successfully');
    }
    public function support_docs(Request $request)
    {
        $file = $request->file('file');

        // you also need to keep file extension as well
        $name = time() . $file->getClientOriginalName();

        // using the array instead of object
        $file->move(public_path() . '/uploads/e_files/', $name);
        $main_image = asset('public/uploads/e_files/' . $name);

        DB::table('cliam_documents')->insert([
            'user_id' => Auth::user()->id,
            'claim_id' => $request->e_file_id,
            'claim_docs' => $main_image,
            'details' => $request->details,
        ]);

        return redirect()->back()->withSuccess('Documents Added Successfully');
    }
    public function complete_case(Request $request){
        DB::table('submmision_of_claim')->where('e_file_id','=',$request->e_file_id)->update([
            'completed_case' => 1,
        ]);

        return redirect()->back()->withSuccess('Finished your claim Successfully');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect::to("history/sign-in");
    }
}
