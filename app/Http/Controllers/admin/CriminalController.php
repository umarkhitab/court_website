<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CriminalController extends Controller
{
    public function criminal_miscellaneous_matters()
    {
        return view('admin.list.pleading.criminal_miscellaneous.criminal_miscellaneous_matters');
    }
    public function application_under_section_22()
    {
        $files = DB::table('pleadings')->where('slug','application-under-section-22-A-CrPC')->get();

        return view('admin.list.pleading.criminal_miscellaneous.application_under_section_22')->with('files',$files);

    }
    public function up_application_under_section_22(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Application under section 22-A CrPC',
            'slug' => 'application-under-section-22-A-CrPC',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function petition_under_section_133()
    {
        $files = DB::table('pleadings')->where('slug','petition-under-section-133-crPC')->get();

        return view('admin.list.pleading.criminal_miscellaneous.petition_under_section_133')->with('files',$files);

    }
    public function up_petition_under_section_133(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Petition under section 133 CrPC',
            'slug' => 'petition-under-section-133-crPC',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function petition_under_section_145()
    {
        $files = DB::table('pleadings')->where('slug','petition-under-section-145-crPC')->get();

        return view('admin.list.pleading.criminal_miscellaneous.petition_under_section_145')->with('files',$files);

    }
    public function up_petition_under_section_145(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Petition under section 145 CrPC',
            'slug' => 'petition-under-section-145-crPC',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function pre_arrest_bail_application()
    {
        $files = DB::table('pleadings')->where('slug','post-arrest-bail-application')->get();

        return view('admin.list.pleading.criminal_miscellaneous.pre_arrest_bail_application')->with('files',$files);

    }
    public function up_pre_arrest_bail_application(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Post Arrest Bail Application',
            'slug' => 'post-arrest-bail-application',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function different_forms()
    {
        $files = DB::table('pleadings')->where('slug','different-forms-used-in-the-courts')->get();

        return view('admin.list.pleading.different_forms')->with('files',$files); 
    }
    public function up_different_forms(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Different Forms used in the Courts',
            'slug' => 'different-forms-used-in-the-courts',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function family_court_suit()
    {
        return view('admin.list.pleading.family_court_suit.front_family_court_suit');

    }
    public function dissolution_of_marriage()
    {
        $files = DB::table('pleadings')->where('slug','dissolution-of-marriage')->get();

        return view('admin.list.pleading.family_court_suit.dissolution_of_marriage')->with('files',$files); 
    }
    public function up_dissolution_of_marriage(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Dissolution of Marriage',
            'slug' => 'dissolution-of-marriage',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function guardianship_certificate()
    {
        $files = DB::table('pleadings')->where('slug','guardianship-certificate')->get();

        return view('admin.list.pleading.family_court_suit.guardianship_certificate')->with('files',$files); 
    }
    public function up_guardianship_certificate(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Guardianship Certificate',
            'slug' => 'guardianship-certificate',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function jactitation_of_marriage()
    {
        $files = DB::table('pleadings')->where('slug','jactitation-of-marriage')->get();

        return view('admin.list.pleading.family_court_suit.jactitation_of_marriage')->with('files',$files); 
    }
    public function up_jactitation_of_marriage(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Jactitation of Marriage',
            'slug' => 'jactitation-of-marriage',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function maintenance()
    {
        $files = DB::table('pleadings')->where('slug','maintenance')->get();

        return view('admin.list.pleading.family_court_suit.maintenance')->with('files',$files); 
    }
    public function up_maintenance(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Maintenance',
            'slug' => 'maintenance',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function restitution_of_conjugal_right()
    {
        $files = DB::table('pleadings')->where('slug','restitution-of-conjugal-right')->get();

        return view('admin.list.pleading.family_court_suit.restitution_of_conjugal_right')->with('files',$files); 
    }
    public function up_restitution_of_conjugal_right(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Restitution of Conjugal Right',
            'slug' => 'restitution-of-conjugal-right',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function succession_certificate()
    {
        $files = DB::table('pleadings')->where('slug','succession-certificate')->get();

        return view('admin.list.pleading.family_court_suit.succession_certificate')->with('files',$files); 
    }
    public function up_succession_certificate(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Succession Certificate',
            'slug' => 'succession-certificate',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }

    public function habeas_corpus_petition()
    {
        $files = DB::table('pleadings')->where('slug','habeas-corpus-petition-and-documents-or-forms-of-dcouments-to-be-annexed')->get();

        return view('admin.list.pleading.habeas_corpus_petition')->with('files',$files); 
    }
    public function up_habeas_corpus_petition(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Habeas Corpus Petition and documents or forms of dcouments to be annexed',
            'slug' => 'habeas-corpus-petition-and-documents-or-forms-of-dcouments-to-be-annexed',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }

    public function plaint_and_documents()
    {
        return view('admin.list.pleading.plaint_and_documents.plaint_and_documents');

    }

    public function declaration()
    {
        $files = DB::table('pleadings')->where('slug','declaration')->get();

        return view('admin.list.pleading.plaint_and_documents.declaration')->with('files',$files); 
    }
    public function up_declaration(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Declaration',
            'slug' => 'declaration',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function land_acquisition_reference()
    {
        $files = DB::table('pleadings')->where('slug','land-acquisition-reference')->get();

        return view('admin.list.pleading.plaint_and_documents.land_acquisition_reference')->with('files',$files); 
    }
    public function up_land_acquisition_reference(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Land Acquisition Reference',
            'slug' => 'land-acquisition-reference',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function partition()
    {
        $files = DB::table('pleadings')->where('slug','partition')->get();

        return view('admin.list.pleading.plaint_and_documents.partition')->with('files',$files); 
    }
    public function up_partition(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Partition',
            'slug' => 'partition',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function perpetual_and_mandatory_injunction()
    {
        $files = DB::table('pleadings')->where('slug','perpetual-and-mandatory-injunction')->get();

        return view('admin.list.pleading.plaint_and_documents.perpetual_and_mandatory_injunction')->with('files',$files); 
    }
    public function up_perpetual_and_mandatory_injunction(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Perpetual and Mandatory Injunction',
            'slug' => 'perpetual-and-mandatory-injunction',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function preemption()
    {
        $files = DB::table('pleadings')->where('slug','preemption')->get();

        return view('admin.list.pleading.plaint_and_documents.preemption')->with('files',$files); 
    }
    public function up_preemption(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Preemption',
            'slug' => 'preemption',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function recovery()
    {
        $files = DB::table('pleadings')->where('slug','recovery')->get();

        return view('admin.list.pleading.plaint_and_documents.recovery')->with('files',$files); 
    }
    public function up_recovery(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Recovery',
            'slug' => 'recovery',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }

    public function rent_petiton()
    {
        $files = DB::table('pleadings')->where('slug','rent-petiton')->get();

        return view('admin.list.pleading.rent_petiton')->with('files',$files); 
    }
    public function up_rent_petiton(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Rent Petiton',
            'slug' => 'rent-petiton',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function revision_petition()
    {
        return view('admin.list.pleading.revision_petition.revision_petition'); 
    }
    public function civil_revision_petition()
    {
        $files = DB::table('pleadings')->where('slug','civil-revision-petition')->get();

        return view('admin.list.pleading.revision_petition.civil_revision_petition')->with('files',$files); 
    }
    public function up_civil_revision_petition(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Civil Revision Petition',
            'slug' => 'civil-revision-petition',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
    public function criminal_revision_petition()
    {
        $files = DB::table('pleadings')->where('slug','criminal-revision-petition')->get();

        return view('admin.list.pleading.revision_petition.criminal_revision_petition')->with('files',$files); 
    }
    public function up_criminal_revision_petition(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Criminal Revision Petition',
            'slug' => 'criminal-revision-petition',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }

    public function written_statement()
    {
        $files = DB::table('pleadings')->where('slug','written-statement-and-documents-or-forms-of-dcouments-to-be-annexed')->get();

        return view('admin.list.pleading.written_statement')->with('files',$files); 
    }
    public function up_written_statement(Request $request)
    {
        $imageName = time() . '.' . $request->file->extension();

        $request->file->move(public_path('uploads/petition_images'), $imageName);

        DB::table('pleadings')->insert([
            'file' => 'public/uploads/petition_images/'.$imageName,
            'name' => 'Written Statement and documents or forms of dcouments to be annexed',
            'slug' => 'written-statement-and-documents-or-forms-of-dcouments-to-be-annexed',
        ]);

        return back()
            ->with('success', 'Data Added Successfully'); 
    }
}
