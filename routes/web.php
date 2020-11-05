<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/full-message/{id}', 'WelcomeController@full_msg')->name('full-message');


Auth::routes();

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('pleading-note', 'admin\NoteController');

    // Judge Message Route
    Route::resource('judge_message', 'admin\JudgeMessage');

    // Announcement Route
    Route::resource('announcement', 'admin\AouncmentsController');

    // Banners Route
    Route::resource('banner', 'admin\BannersController');

    // List Route
    Route::resource('list', 'admin\ListController');

    // History of D&SG Route
    Route::resource('history', 'admin\HistoryController');

    // History of SCG Admin Route
    Route::get('history_scj', 'admin\HistoryController@history_scj')->name('history_scj');
    Route::post('scj_store', 'admin\HistoryController@scj_store')->name('scj_store');
    Route::get('scj_delete/{id}', 'admin\HistoryController@scj_delete')->name('scj_delete');
    Route::get('scj_edit/{id}', 'admin\HistoryController@scj_edit')->name('scj_edit');
    Route::post('scj_update/{id}', 'admin\HistoryController@scj_update')->name('scj_update');

    // History of SCG Judicail Route
    Route::get('history_scj_jud', 'admin\HistoryController@history_scj_jud')->name('history_scj_jud');
    Route::post('scj_store_jud', 'admin\HistoryController@scj_store_jud')->name('scj_store_jud');
    Route::get('scj_delete_jud/{id}', 'admin\HistoryController@scj_delete_jud')->name('scj_delete_jud');
    Route::get('scj_edit_jud/{id}', 'admin\HistoryController@scj_edit_jud')->name('scj_edit_jud');
    Route::post('scj_update_jud/{id}', 'admin\HistoryController@scj_update_jud')->name('scj_update_jud');

    // History of SCG Guardian Route
    Route::get('history_scj_gurd', 'admin\HistoryController@history_scj_gurd')->name('history_scj_gurd');
    Route::post('scj_store_gurd', 'admin\HistoryController@scj_store_gurd')->name('scj_store_gurd');
    Route::get('scj_delete_gurd/{id}', 'admin\HistoryController@scj_delete_gurd')->name('scj_delete_gurd');
    Route::get('scj_edit_gurd/{id}', 'admin\HistoryController@scj_edit_gurd')->name('scj_edit_gurd');
    Route::post('scj_update_gurd/{id}', 'admin\HistoryController@scj_update_gurd')->name('scj_update_gurd');

    // Judicial Officers Route
    Route::resource('judofficers', 'admin\JudicialOfficerController');

    // Judicial Officers Link Route
    Route::resource('judofficerslinks', 'admin\Judicialofficelinks');

    // Staff Link Route
    Route::resource('stafflink', 'admin\StafflinksController');

    // Staff Route
    Route::resource('staff', 'admin\StaffController');

    // Court Staff Route
    Route::resource('court_staff', 'admin\CourtStaffController');

    // Court Staff Route
    Route::resource('per_cart', 'admin\PeriodicalCatController');

    // Court Staff Route
    Route::resource('fortnightly', 'admin\FortnightStatementController');

    // Chiefe Justice Message Route
    Route::resource('cheifejustice', 'admin\CheifJusticeController');

    // registrar Message Route
    Route::resource('registrar', 'admin\RegistrarController');

    // Cause Staff Route
    Route::resource('causelist', 'admin\CauseListController');

    // Notifications Route
    Route::resource('noty', 'admin\NotificationsController');

    // Jobs Route
    Route::resource('jobs', 'admin\JobsController');

    // Picture Gallery Route
    Route::resource('pic', 'admin\PictureGalleryController');

    // Video Gallery Route
    Route::resource('video', 'admin\VideoController');

    Route::resource('pic_titles', 'admin\Pic_gallery_titles');

    // Downloads Route
    Route::resource('downloads', 'admin\DownloadsController');

    // Judgemental Orders Controllers
    Route::resource('judgemental', 'admin\JudgementOrdersController');

    // Pleading Routes
    Route::resource('pleadings', 'admin\PleadingsController');

    // Library Routes
    Route::resource('library', 'admin\LibraryController');

    // Publishe Articles Routes
    Route::resource('articles', 'admin\ArticlesController');

    Route::resource('e-file-data', 'admin\EfilingController');


    //New Peadings
    Route::get('civil-judicial-urdu-formats', 'admin\PleadingsController@civil_judicial_urdu_formats')->name('civil-judicial-urdu-formats');
    Route::post('up-civil-judicial-urdu-formats', 'admin\PleadingsController@up_civil_judicial_urdu_formats')->name('up-civil-judicial-urdu-formats');
    Route::get('delete_up_civil_judicial/{id}', 'admin\PleadingsController@delete_up_civil_judicial')->name('delete_up_civil_judicial');

    Route::get('criminal-judicial-urdu-formats', 'admin\PleadingsController@criminal_judicial_urdu_formats')->name('criminal-judicial-urdu-formats');
    Route::post('up-criminal-judicial-urdu-formats', 'admin\PleadingsController@up_criminal_judicial_urdu_formats')->name('up-criminal-judicial-urdu-formats');
    Route::get('delete_up_criminal_judicial/{id}', 'admin\PleadingsController@delete_up_criminal_judicial')->name('delete_up_criminal_judicial');

    Route::get('judicial-forms', 'admin\PleadingsController@judicial_forms')->name('judicial-forms');
    Route::post('up-judicial-forms', 'admin\PleadingsController@up_judicial_forms')->name('up-judicial-forms');
    Route::get('delete_judicial_forms/{id}', 'admin\PleadingsController@delete_judicial_forms')->name('delete_judicial_forms');


    // Appeal Routs
    Route::get('appeal', 'admin\PleadingsController@appeal')->name('appeal');
    Route::get('appeal-against-decree', 'admin\PleadingsController@appeal_against_decree')->name('appeal-against-decree');
    Route::get('upload-appeal-against-decree', 'admin\PleadingsController@upload_appeal_against_decree')->name('upload-appeal-against-decree');
    Route::post('upload-appeal-against-decree', 'admin\PleadingsController@file_up_appeal_against_decree')->name('upload-appeal-against-decree');
    Route::get('civil_miscellaneous_appeal', 'admin\PleadingsController@civil_miscellaneous_appeal')->name('civil_miscellaneous_appeal');
    Route::post('upload_civil_miscellaneous_appeal', 'admin\PleadingsController@upload_civil_miscellaneous_appeal')->name('upload_civil_miscellaneous_appeal');

    Route::get('criminal_appeal', 'admin\PleadingsController@criminal_appeal')->name('criminal_appeal');
    Route::post('upload_criminal_appeal', 'admin\PleadingsController@upload_criminal_appeal')->name('upload_criminal_appeal');

    // Faimly Court
    Route::get('family_court', 'admin\PleadingsController@family_court')->name('family_court');
    Route::post('upload_family_court', 'admin\PleadingsController@upload_family_court')->name('upload_family_court');

    // civil_miscellaneous_applications
    Route::get('civil_miscellaneous_applications', 'admin\PleadingsController@civil_miscellaneous_applications')->name('civil_miscellaneous_applications');

    Route::get('applications_for_appointment', 'admin\PleadingsController@applications_for_appointment')->name('applications_for_appointment');
    Route::post('up_applications_for_appointment', 'admin\PleadingsController@up_applications_for_appointment')->name('up_applications_for_appointment');

    Route::get('appointment_of_receiver', 'admin\PleadingsController@appointment_of_receiver')->name('appointment_of_receiver');
    Route::post('up_appointment_of_receiver', 'admin\PleadingsController@up_appointment_of_receiver')->name('up_appointment_of_receiver');

    Route::get('applications_for_restitution', 'admin\PleadingsController@applications_for_restitution')->name('applications_for_restitution');
    Route::post('up_applications_for_restitution', 'admin\PleadingsController@up_applications_for_restitution')->name('up_applications_for_restitution');

    Route::get('temporary_injunction_applications', 'admin\PleadingsController@temporary_injunction_applications')->name('temporary_injunction_applications');
    Route::post('up_temporary_injunction_applications', 'admin\PleadingsController@up_temporary_injunction_applications')->name('up_temporary_injunction_applications');

    // criminal_miscellaneous_matters
    Route::get('criminal_miscellaneous_matters', 'admin\CriminalController@criminal_miscellaneous_matters')->name('criminal_miscellaneous_matters');

    Route::get('application_under_section_22', 'admin\CriminalController@application_under_section_22')->name('application_under_section_22');
    Route::post('up_application_under_section_22', 'admin\CriminalController@up_application_under_section_22')->name('up_application_under_section_22');

    Route::get('petition_under_section_133', 'admin\CriminalController@petition_under_section_133')->name('petition_under_section_133');
    Route::post('up_petition_under_section_133', 'admin\CriminalController@up_petition_under_section_133')->name('up_petition_under_section_133');

    Route::get('petition_under_section_145', 'admin\CriminalController@petition_under_section_145')->name('petition_under_section_145');
    Route::post('up_petition_under_section_145', 'admin\CriminalController@up_petition_under_section_145')->name('up_petition_under_section_145');

    Route::get('pre_arrest_bail_application', 'admin\CriminalController@pre_arrest_bail_application')->name('pre_arrest_bail_application');
    Route::post('up_pre_arrest_bail_application', 'admin\CriminalController@up_pre_arrest_bail_application')->name('up_pre_arrest_bail_application');

    // Different Forms
    Route::get('different_forms', 'admin\CriminalController@different_forms')->name('different_forms');
    Route::post('up_different_forms', 'admin\CriminalController@up_different_forms')->name('up_different_forms');

    // Family Court Suit
    Route::get('family_court_suit', 'admin\CriminalController@family_court_suit')->name('family_court_suit');

    Route::get('dissolution_of_marriage', 'admin\CriminalController@dissolution_of_marriage')->name('dissolution_of_marriage');
    Route::post('up_dissolution_of_marriage', 'admin\CriminalController@up_dissolution_of_marriage')->name('up_dissolution_of_marriage');

    Route::get('guardianship_certificate', 'admin\CriminalController@guardianship_certificate')->name('guardianship_certificate');
    Route::post('up_guardianship_certificate', 'admin\CriminalController@up_guardianship_certificate')->name('up_guardianship_certificate');

    Route::get('jactitation_of_marriage', 'admin\CriminalController@jactitation_of_marriage')->name('jactitation_of_marriage');
    Route::post('up_jactitation_of_marriage', 'admin\CriminalController@up_jactitation_of_marriage')->name('up_jactitation_of_marriage');

    Route::get('maintenance', 'admin\CriminalController@restitution_of_conjugal_right')->name('maintenance');
    Route::post('up_maintenance', 'admin\CriminalController@up_maintenance')->name('up_maintenance');

    Route::get('restitution_of_conjugal_right', 'admin\CriminalController@restitution_of_conjugal_right')->name('restitution_of_conjugal_right');
    Route::post('up_restitution_of_conjugal_right', 'admin\CriminalController@up_restitution_of_conjugal_right')->name('up_restitution_of_conjugal_right');

    Route::get('succession_certificate', 'admin\CriminalController@succession_certificate')->name('succession_certificate');
    Route::post('up_succession_certificate', 'admin\CriminalController@up_succession_certificate')->name('up_succession_certificate');

    // Habeas Corpus Petition and documents or forms of dcouments to be annexed
    Route::get('habeas_corpus_petition', 'admin\CriminalController@habeas_corpus_petition')->name('habeas_corpus_petition');
    Route::post('up_habeas_corpus_petition', 'admin\CriminalController@up_habeas_corpus_petition')->name('up_habeas_corpus_petition');


    // Plaint and documents or forms of dcouments to be annexed
    Route::get('plaint_and_documents', 'admin\CriminalController@plaint_and_documents')->name('plaint_and_documents');

    Route::get('declaration', 'admin\CriminalController@declaration')->name('declaration');
    Route::post('up_declaration', 'admin\CriminalController@up_declaration')->name('up_declaration');

    Route::get('land_acquisition_reference', 'admin\CriminalController@land_acquisition_reference')->name('land_acquisition_reference');
    Route::post('up_land_acquisition_reference', 'admin\CriminalController@up_land_acquisition_reference')->name('up_land_acquisition_reference');

    Route::get('partition', 'admin\CriminalController@partition')->name('partition');
    Route::post('up_partition', 'admin\CriminalController@up_partition')->name('up_partition');

    Route::get('perpetual_and_mandatory_injunction', 'admin\CriminalController@perpetual_and_mandatory_injunction')->name('perpetual_and_mandatory_injunction');
    Route::post('up_perpetual_and_mandatory_injunction', 'admin\CriminalController@up_perpetual_and_mandatory_injunction')->name('up_perpetual_and_mandatory_injunction');

    Route::get('preemption', 'admin\CriminalController@preemption')->name('preemption');
    Route::post('up_preemption', 'admin\CriminalController@up_preemption')->name('up_preemption');

    Route::get('recovery', 'admin\CriminalController@recovery')->name('recovery');
    Route::post('up_recovery', 'admin\CriminalController@up_recovery')->name('up_recovery');

    // Rent Petiton and documents or forms of dcouments to be annexed
    Route::get('rent_petiton', 'admin\CriminalController@rent_petiton')->name('rent_petiton');
    Route::post('up_rent_petiton', 'admin\CriminalController@up_rent_petiton')->name('up_rent_petiton');

    // Rent Petiton and documents or forms of dcouments to be annexed
    Route::get('revision_petition', 'admin\CriminalController@revision_petition')->name('revision_petition');

    // Rent Petiton and documents or forms of dcouments to be annexed
    Route::get('civil_revision_petition', 'admin\CriminalController@civil_revision_petition')->name('civil_revision_petition');
    Route::post('up_civil_revision_petition', 'admin\CriminalController@up_civil_revision_petition')->name('up_civil_revision_petition');

    // Rent Petiton and documents or forms of dcouments to be annexed
    Route::get('criminal_revision_petition', 'admin\CriminalController@criminal_revision_petition')->name('criminal_revision_petition');
    Route::post('up_criminal_revision_petition', 'admin\CriminalController@up_criminal_revision_petition')->name('up_criminal_revision_petition');

    // Written Statement and documents or forms of dcouments to be annexed
    Route::get('written_statement', 'admin\CriminalController@written_statement')->name('written_statement');
    Route::post('up_written_statement', 'admin\CriminalController@up_written_statement')->name('up_written_statement');


    Route::get('police_station', 'admin\CauseListController@police_station')->name('police_station');
    Route::post('police_station', 'admin\CauseListController@police_station')->name('police_station');
    Route::get('delete_police_station/{id}', 'admin\CauseListController@delete_police_station')->name('delete_police_station');

    Route::get('fir', 'admin\CauseListController@fir')->name('fir');
    Route::post('add_fir', 'admin\CauseListController@add_fir')->name('add_fir');
    Route::get('delete_fir/{id}', 'admin\CauseListController@delete_fir')->name('delete_fir');

});

// Frontend Routes
Route::group(['prefix' => 'history'], function () {

    //History Routes
    Route::get('court-history', 'frontend\HistoryController@index')->name('court-history');
    Route::get('history_sdj', 'frontend\HistoryController@history_dsj')->name('history_sdj');
    Route::get('history_scjs', 'frontend\HistoryController@history_scjs')->name('history_scjs');
    Route::get('history_scj_juds', 'frontend\HistoryController@history_scj_juds')->name('history_scj_juds');
    Route::get('history_scj_gurds', 'frontend\HistoryController@history_scj_gurds')->name('history_scj_gurds');

    //Judicial Routes
    Route::get('links/{type}', 'frontend\HistoryController@links')->name('links');
    Route::get('judicail_officer/{id}', 'frontend\HistoryController@judicail_officer')->name('judicail_officer');

    //Category wise Staff Routes
    Route::get('cat-staff-links', 'frontend\HistoryController@cat_staff_links')->name('cat-staff-links');
    Route::get('cat-staff/{id}', 'frontend\HistoryController@cat_staff')->name('cat-staff');

    //Court Wise Staff
    Route::get('court-staff', 'frontend\HistoryController@court_staff')->name('court-staff');

    //Cause List
    Route::get('cause-list', 'frontend\HistoryController@cause_list')->name('cause-list');
    Route::post('get-cause-list', 'frontend\HistoryController@get_cause_list')->name('get-cause-list');

    //
    Route::get('notifications', 'frontend\HistoryController@notifications')->name('notifications');
    Route::get('jobs', 'frontend\HistoryController@jobs')->name('jobs');

    Route::get('picture-gallery-title', 'frontend\HistoryController@picture_gallery_title')->name('picture-gallery-title');
    Route::get('get-picture-gallery/{id}', 'frontend\HistoryController@get_pic_gall')->name('get-picture-gallery');

    Route::get('video-gallery-title', 'frontend\HistoryController@video_gallery_title')->name('video-gallery-title');
    Route::get('get-video-gallery-title/{id}', 'frontend\HistoryController@get_video_gallery_title')->name('get-video-gallery-title');

    Route::get('downloads', 'frontend\HistoryController@downloads')->name('downloads');

    Route::get('fortightly-statements', 'frontend\HistoryController@fortightly_statements')->name('fortightly-statements');

    Route::get('monthly-statements', 'frontend\HistoryController@monthly_statements')->name('monthly-statements');

    Route::post('get-fortightly-statements', 'frontend\HistoryController@get_fortightly')->name('get-fortightly-statements');

    Route::post('get-monthly', 'frontend\HistoryController@get_monthly')->name('get-monthly');

    Route::get('case-managment', 'frontend\HistoryController@case_managment')->name('case-managment');

    Route::get('fir', 'frontend\HistoryController@fir')->name('fir');
    Route::post('get_fir', 'frontend\HistoryController@get_fir')->name('get_fir');

    Route::get('profile/{id}', 'frontend\HistoryController@profile')->name('profile');

    Route::get('judgement_orders', 'frontend\HistoryController@judgement_orders')->name('judgement_orders');
    Route::post('get_judgement_orders', 'frontend\HistoryController@get_judgement_orders')->name('get_judgement_orders');

    Route::get('fornt_pleadings', 'frontend\PleadingsController@pleadings')->name('fornt_pleadings');
    Route::get('fornt_appeal', 'frontend\PleadingsController@appeal')->name('fornt_appeal');
    Route::get('fornt_appeal_against', 'frontend\PleadingsController@fornt_appeal_against')->name('fornt_appeal_against');
    Route::get('fornt_up_appeal_against', 'frontend\PleadingsController@fornt_up_appeal_against')->name('fornt_up_appeal_against');
    Route::get('fornt_up_civil_miscellaneous_appeal', 'frontend\PleadingsController@civil_miscellaneous_appeal')->name('fornt_up_civil_miscellaneous_appeal');
    Route::get('fornt_criminal_appeal', 'frontend\PleadingsController@criminal_appeal')->name('fornt_criminal_appeal');
    Route::get('fornt_family_court', 'frontend\PleadingsController@fornt_family_court')->name('fornt_family_court');

    // Civil Miscellaneous Applications and documents or forms of dcouments to be annexed
    Route::get('front_civil_miscellaneous', 'frontend\PleadingsController@front_civil_miscellaneous')->name('front_civil_miscellaneous');

    Route::get('front_commission', 'frontend\PleadingsController@front_commission')->name('front_commission');
    Route::get('front_receiver', 'frontend\PleadingsController@front_receiver')->name('front_receiver');
    Route::get('front_restitution', 'frontend\PleadingsController@front_restitution')->name('front_restitution');
    Route::get('front_injunction', 'frontend\PleadingsController@front_injunction')->name('front_injunction');

    // Criminal Miscellaneous Matters and documents or forms of dcouments to be annexed
    Route::get('front_criminal_miscellaneous', 'frontend\PleadingsController@front_criminal_miscellaneous')->name('front_criminal_miscellaneous');

    Route::get('front_section_22', 'frontend\PleadingsController@front_section_22')->name('front_section_22');
    Route::get('front_section_133', 'frontend\PleadingsController@front_section_133')->name('front_section_133');
    Route::get('front_section_145', 'frontend\PleadingsController@front_section_145')->name('front_section_145');
    Route::get('front_arrest_bail', 'frontend\PleadingsController@front_arrest_bail')->name('front_arrest_bail');

    Route::get('front_diff_forms', 'frontend\PleadingsController@front_diff_forms')->name('front_diff_forms');

    // Family Court Suit and documents or forms of dcouments to be annexed
    Route::get('front_family_court_suit', 'frontend\PleadingsController@front_family_court_suit')->name('front_family_court_suit');

    Route::get('front_dissolution_of_marriage', 'frontend\PleadingsController@front_dissolution_of_marriage')->name('front_dissolution_of_marriage');
    Route::get('front_guardianship_certificate', 'frontend\PleadingsController@front_guardianship_certificate')->name('front_guardianship_certificate');
    Route::get('front_jactitation_of_marriage', 'frontend\PleadingsController@front_jactitation_of_marriage')->name('front_jactitation_of_marriage');
    Route::get('front_maintenance', 'frontend\PleadingsController@front_maintenance')->name('front_maintenance');
    Route::get('font_restitution_of_conjugal_right', 'frontend\PleadingsController@font_restitution_of_conjugal_right')->name('font_restitution_of_conjugal_right');
    Route::get('front_succession_certificate', 'frontend\PleadingsController@front_succession_certificate')->name('front_succession_certificate');

    // Habeas Corpus Petition and documents or forms of dcouments to be annexed
    Route::get('front_habeas_corpus', 'frontend\PleadingsController@front_habeas_corpus')->name('front_habeas_corpus');

    // Plaint and documents or forms of dcouments to be annexed
    Route::get('front_plaint_and_documents', 'frontend\PleadingsController@front_plaint_and_documents')->name('front_plaint_and_documents');

    Route::get('front_declaration', 'frontend\PleadingsController@front_declaration')->name('front_declaration');
    Route::get('front_land_acquisition_reference', 'frontend\PleadingsController@front_land_acquisition_reference')->name('front_land_acquisition_reference');

    Route::get('front_partition', 'frontend\PleadingsController@front_partition')->name('front_partition');
    Route::get('front_mandatory_injunction', 'frontend\PleadingsController@front_mandatory_injunction')->name('front_mandatory_injunction');
    Route::get('front_preemption', 'frontend\PleadingsController@front_preemption')->name('front_preemption');
    Route::get('front_recovery', 'frontend\PleadingsController@front_recovery')->name('front_recovery');

    Route::get('front_rent_petiton', 'frontend\PleadingsController@front_rent_petiton')->name('front_rent_petiton');

    // Revision Petition and documents or forms of dcouments to be annexed
    Route::get('front_revision_petition', 'frontend\PleadingsController@front_revision_petition')->name('front_revision_petition');

    Route::get('front_civil_revision_petition', 'frontend\PleadingsController@front_civil_revision_petition')->name('front_civil_revision_petition');
    Route::get('front_criminal_revision_petition', 'frontend\PleadingsController@front_criminal_revision_petition')->name('front_criminal_revision_petition');


    Route::get('front_written_statement', 'frontend\PleadingsController@front_written_statement')->name('front_written_statement');

    Route::get('civil_judicial_urdu_formats', 'frontend\PleadingsController@civil_judicial_urdu_formats')->name('civil_judicial_urdu_formats');
    Route::get('criminal_judicial_urdu_formats', 'frontend\PleadingsController@criminal_judicial_urdu_formats')->name('criminal_judicial_urdu_formats');
    Route::get('judicial_forms', 'frontend\PleadingsController@judicial_forms')->name('judicial_forms');

    Route::get('related-links', 'frontend\HistoryController@related_links')->name('related-links');
    Route::get('overseas-pakistan', 'frontend\HistoryController@overseas_pakistan')->name('overseas-pakistan');

    // Added by UMAR for getting clicked id item into form
    //Route::get('events/{id}','frontend\EventsControllerFrontend@show')->name('events');
    Route::resource('event','EventControllerFront');
    Route::get('event','EventControllerFront@index')->name('event');
    
    Route::resource('events', 'admin\EventsController');
    Route::resource('gallery', 'admin\GalleryController');

    Route::get('library_data', 'frontend\HistoryController@library')->name('library_data');

    Route::get('published_articels', 'frontend\HistoryController@published_articels')->name('published_articels');


    Route::get('e-file-steps', 'frontend\EfileController@index')->name('e-file-steps');

    Route::get('e-file-signup', 'frontend\EfileController@signupform')->name('e-file-signup');
    Route::post('sign-user', 'frontend\EfileController@signup')->name('sign-user');
    Route::get('verify-account/{code}', 'frontend\EfileController@verify_account')->name('verify-account');
    Route::get('sign-in', 'frontend\EfileController@sign_in')->name('sign-in');

    Route::post('login-user', 'frontend\EfileController@login_user')->name('login-user');


});

Route::group(['middleware' => 'auth'], function () {

    Route::get('user-e-file-dashboard', 'frontend\EfileController@user_e_file_dashboard')->name('user-e-file-dashboard');

    Route::post('upload-files', 'frontend\EfileController@upload_files')->name('upload-files');
    Route::post('claim_form', 'frontend\EfileController@claim_form')->name('claim_form');
    Route::post('add_party_to_list', 'frontend\EfileController@add_party_to_list')->name('add_party_to_list');
    Route::post('support_docs', 'frontend\EfileController@support_docs')->name('support_docs');
    Route::post('complete_case', 'frontend\EfileController@complete_case')->name('complete_case');


    Route::get('user-logout', 'frontend\EfileController@logout')->name('user-logout');

});


    
    
 
