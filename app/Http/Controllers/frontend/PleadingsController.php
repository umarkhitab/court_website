<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PleadingsController extends Controller
{
    public function pleadings()
    {
        $notes = DB::table('pleading_note')->get();
        return view('frontend.pleading.pleading',compact('notes'));
    }
    public function appeal()
    {
        return view('frontend.pleading.appeal.civil_appeal');
    }
    public function fornt_appeal_against()
    {
        return view('frontend.pleading.appeal.appeal_against_decree');
    }
    public function fornt_up_appeal_against()
    {
        $files = DB::table('pleadings')->where('slug','appeal-against-decree')->get();

        return view('frontend.pleading.appeal.upload_appeal_against_decree')->with('files',$files);

    }
    public function civil_miscellaneous_appeal()
    {
        $files = DB::table('pleadings')->where('slug','civil-miscellaneous-appeal')->get();
        
        return view('frontend.pleading.appeal.civil_miscellaneous_appeal')->with('files',$files);
    }
    public function criminal_appeal()
    {
        $files = DB::table('pleadings')->where('slug','criminal-appeal-and-documents-or-forms-of-dcouments-to-be-annexed')->get();
        
        return view('frontend.pleading.appeal.criminal_appeal')->with('files',$files);
    }
    public function fornt_family_court()
    {
        $files = DB::table('pleadings')->where('slug','family-court-appeal-and-documents-or-forms-of-dcouments-to-beaannexed')->get();
        
        return view('frontend.pleading.appeal.family_court')->with('files',$files);
    }
    public function front_civil_miscellaneous()
    {
        return view('frontend.pleading.civil-miscellaneous.civil_miscellaneous_applications');
    }
    public function front_civil_mis_app()
    {
        return view('frontend.pleading.civil-miscellaneous.appeal_against_decree');
    }
    public function front_commission()
    {
        $files = DB::table('pleadings')->where('slug','applications-for-appointment-of-commission')->get();
        
        return view('frontend.pleading.civil-miscellaneous.applications_for_appointment')->with('files',$files);
    }
    public function front_receiver()
    {
        $files = DB::table('pleadings')->where('slug','applications-for-appointment-of-receiver')->get();
        
        return view('frontend.pleading.civil-miscellaneous.appointment_of_receiver')->with('files',$files);
    }
    public function front_restitution()
    {
        $files = DB::table('pleadings')->where('slug','applications-for-restitution-under-section-144-CPC')->get();
        
        return view('frontend.pleading.civil-miscellaneous.applications_for_restitution')->with('files',$files);
    }
    public function front_injunction()
    {
        $files = DB::table('pleadings')->where('slug','temporary-injunction-applications')->get();
        
        return view('frontend.pleading.civil-miscellaneous.temporary_injunction_applications')->with('files',$files);
    }

    public function front_criminal_miscellaneous()
    {
        return view('frontend.pleading.criminal_miscellaneous.criminal_miscellaneous_matters');
    }
    public function front_section_22()
    {
        $files = DB::table('pleadings')->where('slug','application-under-section-22-A-CrPC')->get();
        
        return view('frontend.pleading.criminal_miscellaneous.application_under_section_22')->with('files',$files);
    }
    public function front_section_133()
    {
        $files = DB::table('pleadings')->where('slug','petition-under-section-133-crPC')->get();
        
        return view('frontend.pleading.criminal_miscellaneous.petition_under_section_133')->with('files',$files);
    }
    public function front_section_145()
    {
        $files = DB::table('pleadings')->where('slug','petition-under-section-145-crPC')->get();
        
        return view('frontend.pleading.criminal_miscellaneous.petition_under_section_145')->with('files',$files);
    }
    public function front_arrest_bail()
    {
        $files = DB::table('pleadings')->where('slug','post-arrest-bail-application')->get();
        
        return view('frontend.pleading.criminal_miscellaneous.pre_arrest_bail_application')->with('files',$files);
    }
    public function front_diff_forms()
    {
        $files = DB::table('pleadings')->where('slug','different-forms-used-in-the-courts')->get();
        
        return view('frontend.pleading.criminal_miscellaneous.pre_arrest_bail_application')->with('files',$files);
    }
    
    // Family Court Suit and documents or forms of dcouments to be annexed

    public function front_family_court_suit()
    {
        return view('frontend.pleading.family_court_suit.front_family_court_suit');
    }
    public function front_dissolution_of_marriage()
    {
        $files = DB::table('pleadings')->where('slug','dissolution-of-marriage')->get();
        
        return view('frontend.pleading.family_court_suit.files')->with('files',$files);
    }
    public function front_guardianship_certificate()
    {
        $files = DB::table('pleadings')->where('slug','guardianship-certificate')->get();
        
        return view('frontend.pleading.family_court_suit.files')->with('files',$files);
    }
    public function front_jactitation_of_marriage()
    {
        $files = DB::table('pleadings')->where('slug','jactitation-of-marriage')->get();
        
        return view('frontend.pleading.family_court_suit.files')->with('files',$files);
    }
    public function front_maintenance()
    {
        $files = DB::table('pleadings')->where('slug','maintenance')->get();
        
        return view('frontend.pleading.family_court_suit.files')->with('files',$files);
    }
    public function font_restitution_of_conjugal_right()
    {
        $files = DB::table('pleadings')->where('slug','restitution-of-conjugal-right')->get();
        
        return view('frontend.pleading.family_court_suit.files')->with('files',$files);
    }
    public function front_succession_certificate()
    {
        $files = DB::table('pleadings')->where('slug','succession-certificate')->get();
        
        return view('frontend.pleading.family_court_suit.files')->with('files',$files);
    }

    public function front_habeas_corpus()
    {
        $files = DB::table('pleadings')->where('slug','habeas-corpus-petition-and-documents-or-forms-of-dcouments-to-be-annexed')->get();
        
        return view('frontend.pleading.habeas_corpus_petition')->with('files',$files);
    }

    // Plaint and documents or forms of dcouments to be annexed

    public function front_plaint_and_documents()
    {
        return view('frontend.pleading.plaint_and_documents.plaint_and_documents');
    }
    public function front_declaration()
    {
        $files = DB::table('pleadings')->where('slug','declaration')->get();
        
        return view('frontend.pleading.plaint_and_documents.files')->with('files',$files);
    }
    public function front_land_acquisition_reference()
    {
        $files = DB::table('pleadings')->where('slug','land-acquisition-reference')->get();
        
        return view('frontend.pleading.plaint_and_documents.files')->with('files',$files);
    }
    public function front_partition()
    {
        $files = DB::table('pleadings')->where('slug','partition')->get();
        
        return view('frontend.pleading.plaint_and_documents.files')->with('files',$files);
    }
    public function front_mandatory_injunction()
    {
        $files = DB::table('pleadings')->where('slug','perpetual-and-mandatory-injunction')->get();
        
        return view('frontend.pleading.plaint_and_documents.files')->with('files',$files);
    }
    public function front_preemption()
    {
        $files = DB::table('pleadings')->where('slug','preemption')->get();
        
        return view('frontend.pleading.plaint_and_documents.files')->with('files',$files);
    }
    public function front_recovery()
    {
        $files = DB::table('pleadings')->where('slug','recovery')->get();
        
        return view('frontend.pleading.plaint_and_documents.files')->with('files',$files);
    }
    public function front_rent_petiton()
    {
        $files = DB::table('pleadings')->where('slug','rent-petiton')->get();
        
        return view('frontend.pleading.rent_petiton')->with('files',$files);
    }

    // Revision Petition

    public function front_revision_petition()
    {
        return view('frontend.pleading.revision_petition.revision_petition');
    }
    public function front_civil_revision_petition()
    {
        $files = DB::table('pleadings')->where('slug','civil-revision-petition')->get();
        
        return view('frontend.pleading.revision_petition.files')->with('files',$files);
    }
    public function front_criminal_revision_petition()
    {
        $files = DB::table('pleadings')->where('slug','criminal-revision-petition')->get();
        
        return view('frontend.pleading.revision_petition.files')->with('files',$files);
    }
    public function front_written_statement()
    {
        $files = DB::table('pleadings')->where('slug','written-statement-and-documents-or-forms-of-dcouments-to-be-annexed')->get();
        
        return view('frontend.pleading.written_statement')->with('files',$files);
    }
    public function civil_judicial_urdu_formats()
    {
        $files = DB::table('pleadings')->where('slug','civil-judicial-urdu-formats')->get();

        return view('frontend.pleading.files')->with('files',$files);

    }
    public function criminal_judicial_urdu_formats()
    {
        $files = DB::table('pleadings')->where('slug','criminal-judicial-urdu-formats')->get();

        return view('frontend.pleading.files')->with('files',$files);

    }
    public function judicial_forms()
    {
        $files = DB::table('pleadings')->where('slug','judicial_forms')->get();

        return view('frontend.pleading.files')->with('files',$files);

    }
}
