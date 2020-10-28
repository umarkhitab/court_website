<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PleadingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.list.pleading.pleading');
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
        DB::table('pleadings')->insert([
            'name' => $request->name,
            'level' => 0,
            'parent_id' => 0,
            'created_at' => date('Y-m-d H:i:s')
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
        $p = DB::table('pleadings')->where('id', $id)->first();
        return view('admin.list.pleading.edit')->with('p', $p);
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
        DB::table('pleadings')->where('id', $id)->update([
            'name' => $request->name,
        ]);
        return back()
            ->with('success', 'Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function appeal()
    {
        return view('admin.list.pleading.appeal.civil_appeal');
    }
    public function appeal_against_decree()
    {
        return view('admin.list.pleading.appeal.appeal_against_decree');
    }
    public function upload_appeal_against_decree()
    {
        $files = DB::table('pleadings')->where('slug', 'appeal-against-decree')->get();

        return view('admin.list.pleading.appeal.upload_appeal_against_decree')->with('files', $files);
    }
    public function file_up_appeal_against_decree(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $imageName,
            'name' => 'Appeal Against Decree',
            'slug' => 'appeal-against-decree',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function civil_miscellaneous_appeal()
    {
        $files = DB::table('pleadings')->where('slug', 'civil-miscellaneous-appeal')->get();

        return view('admin.list.pleading.appeal.civil_miscellaneous_appeal')->with('files', $files);
    }
    public function upload_civil_miscellaneous_appeal(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $imageName,
            'name' => 'Civil Miscellaneous Appeal',
            'slug' => 'civil-miscellaneous-appeal',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function criminal_appeal()
    {
        $files = DB::table('pleadings')->where('slug', 'criminal-appeal-and-documents-or-forms-of-dcouments-to-be-annexed')->get();

        return view('admin.list.pleading.appeal.criminal_appeal')->with('files', $files);
    }
    public function upload_criminal_appeal(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $imageName,
            'name' => 'Criminal Appeal and documents or forms of dcouments to be annexed',
            'slug' => 'criminal-appeal-and-documents-or-forms-of-dcouments-to-be-annexed',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function family_court()
    {
        $files = DB::table('pleadings')->where('slug', 'family-court-appeal-and-documents-or-forms-of-dcouments-to-beaannexed')->get();

        return view('admin.list.pleading.appeal.family_court')->with('files', $files);
    }
    public function upload_family_court(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $imageName,
            'name' => 'Family Court Appeal and documents or forms of dcouments to be annexed',
            'slug' => 'family-court-appeal-and-documents-or-forms-of-dcouments-to-beaannexed',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function civil_miscellaneous_applications()
    {
        return view('admin.list.pleading.civil-miscellaneous.civil_miscellaneous_applications');
    }
    public function applications_for_appointment()
    {
        $files = DB::table('pleadings')->where('slug', 'applications-for-appointment-of-commission')->get();

        return view('admin.list.pleading.civil-miscellaneous.applications_for_appointment')->with('files', $files);
    }
    public function up_applications_for_appointment(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $imageName,
            'name' => 'Applications for Appointment of Commission',
            'slug' => 'applications-for-appointment-of-commission',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }

    public function appointment_of_receiver()
    {
        $files = DB::table('pleadings')->where('slug', 'applications-for-appointment-of-receiver')->get();

        return view('admin.list.pleading.civil-miscellaneous.appointment_of_receiver')->with('files', $files);
    }
    public function up_appointment_of_receiver(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $imageName,
            'name' => 'Applications for Appointment of Receiver',
            'slug' => 'applications-for-appointment-of-receiver',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function applications_for_restitution()
    {
        $files = DB::table('pleadings')->where('slug', 'applications-for-restitution-under-section-144-CPC')->get();

        return view('admin.list.pleading.civil-miscellaneous.applications_for_restitution')->with('files', $files);
    }
    public function up_applications_for_restitution(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $imageName,
            'name' => 'Applications for Restitution under section 144 CPC',
            'slug' => 'applications-for-restitution-under-section-144-CPC',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function temporary_injunction_applications()
    {
        $files = DB::table('pleadings')->where('slug', 'temporary-injunction-applications')->get();

        return view('admin.list.pleading.civil-miscellaneous.temporary_injunction_applications')->with('files', $files);
    }
    public function up_temporary_injunction_applications(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $imageName,
            'name' => 'Temporary Injunction Applications',
            'slug' => 'temporary-injunction-applications',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function civil_judicial_urdu_formats()
    {
        $files = DB::table('pleadings')->where('slug', 'civil-judicial-urdu-formats')->get();

        return view('admin.list.pleading.civil_judicial_urdu_formats.files')->with('files', $files);
    }
    public function up_civil_judicial_urdu_formats(Request $request)
    {
        $file = $request->file('file');

        //you also need to keep file extension as well
        $name = $file->getClientOriginalName();

        //using the array instead of object
        $file->move(public_path() . '/uploads/petition_images/', $name);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $name,
            'name' => 'Civil Judicial Urdu Formats',
            'slug' => 'civil-judicial-urdu-formats',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function delete_up_civil_judicial($id)
    {
        DB::table('pleadings')->where('id', '=', $id)->delete();

        return back()
            ->with('success', 'Deleted Successfully');
    }
    public function criminal_judicial_urdu_formats()
    {
        $files = DB::table('pleadings')->where('slug', 'criminal-judicial-urdu-formats')->get();

        return view('admin.list.pleading.criminal-judicial-urdu-formats.files')->with('files', $files);
    }
    public function up_criminal_judicial_urdu_formats(Request $request)
    {
        $file = $request->file('file');

        //you also need to keep file extension as well
        $name = $file->getClientOriginalName();

        //using the array instead of object
        $file->move(public_path() . '/uploads/petition_images/', $name);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $name,
            'name' => 'Criminal Judicial Urdu Formats',
            'slug' => 'criminal-judicial-urdu-formats',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function delete_up_criminal_judicial($id)
    {
        DB::table('pleadings')->where('id', '=', $id)->delete();

        return back()
            ->with('success', 'Deleted Successfully');
    }
    public function judicial_forms()
    {
        $files = DB::table('pleadings')->where('slug', 'judicial_forms')->get();

        return view('admin.list.pleading.judicial-forms.files')->with('files', $files);
    }
    public function up_judicial_forms(Request $request)
    {
        $file = $request->file('file');

        //you also need to keep file extension as well
        $name = $file->getClientOriginalName();

        //using the array instead of object
        $file->move(public_path() . '/uploads/petition_images/', $name);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/' . $name,
            'name' => 'Judicial Forms',
            'slug' => 'judicial_forms',
        ]);

        return back()
            ->with('success', 'Data Added Successfully');
    }
    public function delete_judicial_forms($id)
    {
        DB::table('pleadings')->where('id', '=', $id)->delete();

        return back()
            ->with('success', 'Deleted Successfully');
    }
}
