@extends('layouts.frontend')

@section('styles')

<style href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></style>
<style href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></style>

<style>
    nav>.nav.nav-tabs {

        border: none;
        color: #fff;
        background: #272e38;
        border-radius: 0;

    }

    nav>div a.nav-item.nav-link,
    nav>div a.nav-item.nav-link.active {
        border: none;
        padding: 18px 25px;
        color: #fff;
        background: #272e38;
        border-radius: 0;
    }

    nav>div a.nav-item.nav-link.active:after {
        content: "";
        position: relative;
        bottom: -60px;
        left: -10%;
        border: 15px solid transparent;
        border-top-color: #e74c3c;
    }

    .tab-content {
        background: #fdfdfd;
        line-height: 25px;
        border: 1px solid #ddd;
        border-top: 5px solid #e74c3c;
        border-bottom: 5px solid #e74c3c;
        padding: 30px 25px;
    }

    nav>div a.nav-item.nav-link:hover,
    nav>div a.nav-item.nav-link:focus {
        border: none;
        background: #e74c3c;
        color: #fff;
        border-radius: 0;
        transition: background 0.20s linear;
    }
</style>


@endsection

@section('content')

<div class="container-fluid mt-2">
    <div class="row">
        @include('includes.frontend_sidebar')
        <div class="col-lg-9">
            <div class="card card-table">
                <div class="card-header">
                    <h6>
                        E-Filing: Online Complaint Management System
                        <a href="{{ route('user-logout') }}" class="btn btn-danger pull-right">Logout</a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-11 ml-3">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-contrast alert-success alert-dismissible" role="alert">
                                <div class="icon"><span class="mdi mdi-check"></span></div>
                                <div class="message">
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                                            class="mdi mdi-close" aria-hidden="true"></span></button><strong>
                                        {{ $message }} </strong>
                                </div>
                            </div>
                            @endif
                            <p class="text-success float-right">Logged on user: {{ Auth::user()->email }}</p>
                            <ul>
                                <li>District Courts, South Waziristan.</li>
                                <li>Email: sessionscourt.southwaziristan@gmail.com</li>
                                <li>URL: www.southwaziristan.gov.pk</li>
                            </ul>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                        href="#nav-home" role="tab" aria-controls="nav-home"
                        aria-selected="true">Dashboard</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                        aria-selected="false">Submission of Claim</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                        href="#nav-contact" role="tab" aria-controls="nav-contact"
                        aria-selected="false"> Add Parties, Documents & Finish Claim </a>
                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab"
                        href="#nav-about" role="tab" aria-controls="nav-about"
                        aria-selected="false"> Your Claim Status </a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                    aria-labelledby="nav-home-tab">
                    <div class="container">
                        <h5 class="mt-3">
                            How to fill and proceed with Step 2?
                        </h5>
                        <p>
                            In Step 2: you need to complete the given form. You have to
                            review the given form very carefully, because once you have
                            submitted this form, you will not be able to edit this form. A
                            fresh application which will b considered as a fresh application
                            for amendment. So, fill the form very carefully.
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                    aria-labelledby="nav-profile-tab">
                    <p class="text-center"> <b> Step 2: Submission of new claim form. To
                            submit your new claim, please fillout the following form. </b>
                    </p>
                <form method="post" action="{{ route('upload-files') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="card mt-3">
                            <div class="card-header">
                                <b>
                                    Plaintiff's Information
                                </b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Full Name </label>
                                            <input type="text" name="plain_fullname" class="form-control"
                                                placeholder="Your Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Father Name </label>
                                            <input type="text" name="plain_fathername" class="form-control"
                                                placeholder="Your Father Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> CNIC # </label>
                                            <input type="text" name="plain_cnic" class="form-control"
                                                placeholder="Your CNIC #" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Address </label>
                                            <textarea name="plain_address" class="form-control"
                                                placeholder="Your Correct Address"
                                                rows="2" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Gender </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="plain_gender" id="exampleRadios1"
                                                    value="male" checked required>
                                                <label class="form-check-label"
                                                    for="exampleRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="plain_gender" id="exampleRadios2"
                                                    value="female">
                                                <label class="form-check-label"
                                                    for="exampleRadios2" required>
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Date of Birth </label>
                                            <input type="date" name="plain_dob" class="form-control"
                                                placeholder="Select Date of Brith" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Cell Number </label>
                                            <input type="text" name="plain_cell_number" class="form-control"
                                                placeholder="Your Cell Number" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <b>
                                    Respondent/Defendant Information
                                </b>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Full Name </label>
                                            <input type="text" name="res_full_name" class="form-control"
                                                placeholder="Your Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Father Name </label>
                                            <input type="text" name="res_fathername" class="form-control"
                                                placeholder="Your Father Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> CNIC # </label>
                                            <input type="text" name="res_cnic" class="form-control" name="res_cnic"
                                                placeholder="Your CNIC #" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Address </label>
                                            <textarea name="res_address" class="form-control"
                                                placeholder="Your Correct Address"
                                                rows="2" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Gender </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="res_gender" id="exampleRadios1"
                                                    value="male" checked >
                                                <label class="form-check-label"
                                                    for="exampleRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="res_gender" id="exampleRadios2"
                                                    value="female">
                                                <label class="form-check-label"
                                                    for="exampleRadios2">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Date of Birth </label>
                                            <input type="date" name="res_dob" class="form-control"
                                                placeholder="Select Date of Brith" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <b> Attach your claim File </b> <span
                                    class="text-danger">[Max
                                    File Size: 500 Kb- Upload only: </span> <span
                                    class="text-info"> ( 2003,2007,2010,2013 as " .doc ,
                                    docx "
                                    OR Inpage any version: " .inp " ) </span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Attach Claim Document </label>
                                            <input type="file" name="file" class="form-control" required>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group" >
                                            <label> Case Nature </label>
                                            <select name="casenature" class="form-control"
                                                id="">
                                                <option value="Misc Matters- Stay matters (Interim Injunctions)"> Misc Matters- Stay
                                                    matters
                                                    (Interim Injunctions) </option>
                                                <option value="Misc Matters- Objection in Execution"> Misc Matters- Objection in
                                                    Execution </option>
                                                <option value="Misc Matters- Others, Excluding Cases"> Misc Matters- Others,
                                                    Excluding Cases </option>
                                                <option value="Small Claims"> Small Claims
                                                </option>
                                                <option
                                                    value="Cases about Custody of Minor">
                                                    Cases about Custody of Minor
                                                </option>
                                                <option value="Family Cases"> Family Cases
                                                </option>
                                                <option value="Succession"> Succession
                                                </option>
                                                <option value="Rent matters"> Rent matters
                                                </option>
                                                <option value="SC&MO Suits /Appeals"> SC&MO
                                                    Suits /Appeals
                                                </option>
                                                <option value="Insolvency"> Insolvency
                                                </option>
                                                <option value="Civil Suits"> Civil Suits
                                                </option>
                                                <option value="Petition/Case under 12(2) CPC"> Petition/Case under 12(2)
                                                    CPC </option>
                                                <option value="Review Application by C.J;">
                                                    Review Application by C.J;
                                                </option>
                                                <option value="Oder XXXVII/Negotiable Inst. Cases"> Oder XXXVII/Negotiable Inst.
                                                    Cases </option>
                                                <option value="Trade, Commercial, Investment matters, Labour"> Trade, Commercial,
                                                    Investment matters, Labour </option>
                                                <option value="Land Acquisition"> Land
                                                    Acquisition </option>
                                                <option value="Defamation"> Defamation
                                                </option>
                                                <option value="Mental Health Ordinance">
                                                    Mental
                                                    Health Ordinance
                                                </option>
                                                <option value="Execution (excluding in which periodic payments are made)"> Execution
                                                    (excluding in
                                                    which periodic payments are made)
                                                </option>
                                                <option value="Execution in cases other than Civil Suits"> Execution in cases other
                                                    than Civil Suits </option>
                                                <option value="Execution in which periodic payments are made"> Execution in which periodic
                                                    payments are made </option>
                                                <option value="Revisions against Interlocutory Orders"> Revisions against
                                                    Interlocutory Orders </option>
                                                <option value="Appeal against Family Cases">
                                                    Appeal against Family Cases
                                                </option>
                                                <option value="Appeal Against Order of Custody of minor"> Appeal Against Order of
                                                    Custody of minor </option>
                                                <option value="Appeal in Sucsession Cases">
                                                    Appeal in Sucsession Cases
                                                </option>
                                                <option
                                                    value="Appeal in Guardianship Cases">
                                                    Appeal in Guardianship Cases
                                                </option>
                                                <option value="Appeal in Rent Cases"> Appeal
                                                    in
                                                    Rent Cases
                                                </option>
                                                <option value="Review Applications other than by Civil Judge"> Review Applications other
                                                    than by Civil Judge </option>
                                                <option value="Civil Revisions"> Civil
                                                    Revisions
                                                </option>
                                                <option value="Civil Appeal"> Civil Appeal
                                                </option>
                                                <option value="Civil Misc. Appeal"> Civil
                                                    Misc.
                                                    Appeal </option>
                                                <option value="Intellectual Property Cases/Appeal"> Intellectual Property
                                                    Cases/Appeal </option>
                                                <option value="Others"> Others </option>
                                                <option value="12-016(Minor Offences)">
                                                    12-016(Minor Offences)
                                                </option>
                                                <option value="BBA/Bail Application">
                                                    BBA/Bail
                                                    Application
                                                </option>
                                                <option value="Bail Cancelation App"> Bail
                                                    Cancelation App
                                                </option>
                                                <option value="Hebeaus Corpus"> Hebeaus
                                                    Corpus
                                                </option>
                                                <option value="Remand"> Remand </option>
                                                <option value="Challan"> Challan </option>
                                                <option value="Disposal of Property">
                                                    Disposal
                                                    of Property
                                                </option>
                                                <option value="Superdari"> Superdari
                                                </option>
                                                <option value="Transfer App"> Transfer App
                                                </option>
                                                <option value="Others (Misc.) Excluding cases"> Others (Misc.) Excluding
                                                    cases </option>
                                                <option value="Cases/Proceedings U/S 133">
                                                    Cases/Proceedings U/S 133
                                                </option>
                                                <option value="Cases/Proceedings U/S 145">
                                                    Cases/Proceedings U/S 145
                                                </option>
                                                <option value="Juvenile/J.J.S.O.">
                                                    Juvenile/J.J.S.O. </option>
                                                <option value="Foreign Exchange Laws">
                                                    Foreign
                                                    Exchange Laws
                                                </option>
                                                <option value="CNSA/Narcotics">
                                                    CNSA/Narcotics
                                                </option>
                                                <option value="Intellectual Property">
                                                    Intellectual Property
                                                </option>
                                                <option value="Arms Ord"> Arms Ord </option>
                                                <option value="Illegal Disp"> Illegal Disp.
                                                </option>
                                                <option value="SCMO"> SCMO </option>
                                                <option value="Forest"> Forest </option>
                                                <option value="Foreigner Act"> Foreigner Act
                                                </option>
                                                <option value="Food Laws"> Food Laws
                                                </option>
                                                <option value="Contempt of Court"> Contempt
                                                    of
                                                    Court </option>
                                                <option value="Mental Health Ordinance">
                                                    Mental
                                                    Health Ordinance
                                                </option>
                                                <option value="Preventive Detention/ Security Proceedings"> Preventive Detention/
                                                    Security Proceedings </option>
                                                <option value="Consumer Protection Laws">
                                                    Consumer Protection Laws
                                                </option>
                                                <option value="Punishable upto 7 years-PPC">
                                                    Punishable upto 7 years-PPC
                                                </option>
                                                <option value="Punishable upto 7 years-Local & Special Laws"> Punishable upto 7
                                                    years-Local & Special Laws </option>
                                                <option value="Punishabale above 7 years-PPC"> Punishabale above 7
                                                    years-PPC </option>
                                                <option value="Punishabale above 7 years-Local & Special Laws"> Punishabale above
                                                    7
                                                    years-Local & Special Laws </option>
                                                <option value="Criminal Revision"> Criminal
                                                    Revision </option>
                                                <option value="Appeal"> Appeal </option>
                                                <option value="Haad - Prohibition"> Haad -
                                                    Prohibition </option>
                                                <option value="Haad - Zina"> Haad - Zina
                                                </option>
                                                <option value="Haad - Property"> Haad -
                                                    Property
                                                </option>
                                                <option value="Haad - Qazaf"> Haad - Qazaf
                                                </option>
                                                <option value="Environmental Law Cases">
                                                    Environmental Law Cases
                                                </option>
                                                <option value="Others"> Others </option>
                                                <option value="RFA"> RFA </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <button type="submit" class="btn btn-success"> Save Claim </button>
                                </p>
                            </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            <b> Important: Confirmation of Finishing your claim. </b>
                        </div>

                        <hr>
                        <h5>
                            Why you need to click on " Confirm and Finish Step 2 " tab:
                            ?
                        </h5>
                        <p>
                            If you have finished and saved the above form you will
                            receive an Email from the District Courts, Administrative
                            department in which you have been issued an <b> e-Filing ID
                                number </b>, it means your claim has been successfully
                            saved. After that you may click on the <b> " Confirm and
                                Finish Step 2 " </b> button above or below, there you
                            can add any other party in your list [Plaintiff's list] or
                            Respondent/Defendants list.
                        </p>
                        <p>
                            Once you have done adding or deleting parties to your claim
                            there in <b> "Confirm and Finish Step 2 " </b> page. You
                            will now need to add your plaint and supportive documents.
                            You need to attach those documents by clicking on the add
                            document files form.
                        </p>
                        <p>
                            After you finished these steps, you will need to check on
                            the Affidavit checkbox to confirm that you have provided all
                            the information with your claim correctly. Now click on the
                            <b> "Save and Finish " </b> red button to finish the form.
                        </p>
                        <p>
                            Once you save and finished your claim, you would not be able
                            to add/delete any person to your or Respondent list or
                            upload any other document to your claim until you submit an
                            application with such a request which shall be considered
                            and treated as an amendment application. So, check your
                            claim two or three times at least before you click on the
                            “Confirm and Finish” red button. Since the
                            plaints/complaints are legal documents, it is strongly
                            advised that a professional lawyer does the e-filing as an
                            adverse order on such a claim may bar you from seeking any
                            claim or remedy in future. All claims filed through this
                            facility shall be treated as plaints or complaints under the
                            Civil Procedure Code 1908 or the Criminal Procedure Code
                            1860 and requires all formalities of the same to be
                            fulfilled.
                        </p>
                        <p class="text-center">
                            <button class="btn btn-success">Confirm and Finish Step
                                2</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                aria-labelledby="nav-contact-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mt-3">
                                <div class="card-header">
                                    <b>
                                        Add Party Individual's Details to Party list
                                    </b>
                                </div>
                                <div class="card-body">
                                <form action="{{ route('add_party_to_list') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Choose EFID Sent to you through E-Mail </label>
                                                <select class="form-control" name="e_file_id" id="">
                                                    @foreach ($ids as $id)
                                                    <option value="{{ $id->e_file_id }}">{{ $id->e_file_id }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Choose Party </label>
                                                <select class="form-control" name="party" id="">
                                                    <option value="Applicant/Plaintiff">Applicant/Plaintiff</option>
                                                    <option value="Defendant/Respondent">Defendant/Respondent</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Full Name </label>
                                                <input type="text" name="full_name" class="form-control"
                                                    placeholder="Your Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Father Name </label>
                                                <input type="text" name="father_name" class="form-control"
                                                    placeholder="Your Father Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Address </label>
                                                <textarea name="address" placeholder="Enter Address" class="form-control" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> CNIC # </label>
                                                <input type="text" name="cnic" class="form-control"
                                                    placeholder="Your CNIC #" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Gender </label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="gender" id="exampleRadios1"
                                                        value="male" checked required>
                                                    <label class="form-check-label"
                                                        for="exampleRadios1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="gender" id="exampleRadios2"
                                                        value="female">
                                                    <label class="form-check-label"
                                                        for="exampleRadios2" required>
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Live or Died ? </label>
                                                <select class="form-control" name="live_died">
                                                    <option value="Alive">Alive</option>
                                                    <option value="Alive">Died</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Date of Birth </label>
                                                <input type="date" name="dob" class="form-control"
                                                    placeholder="Select Date of Brith" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Cell Number </label>
                                                <input type="text" name="cell_number" class="form-control"
                                                    placeholder="Enter Cell Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-sm btn-primary">Add to List</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mt-3">
                                <div class="card-header">
                                    <b>
                                        Add / Upload supporting documents to your claim [Max File Size: 500 Kb]
                                    </b>
                                </div>
                                <div class="card-body">
                                <form action="{{ route('support_docs') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Choose EFID Sent to you through E-Mail </label>
                                                <select class="form-control" name="e_file_id" id="">
                                                    @foreach ($ids as $id)
                                                    <option value="{{ $id->e_file_id }}">{{ $id->e_file_id }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Attach document to your claim </label>
                                                <input type="file" class="form-control" name="file" id="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label> Details about this file? </label>
                                                <textarea name="details" class="form-control" rows="2" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-sm btn-primary"> Upload Document File </button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mt-3">
                                <div class="card-header">
                                    <b>
                                        Click here to confirm you have finished your claim
                                    </b>
                                </div>
                                <div class="card-body">
                                <form action="{{ route('complete_case') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label> Choose EFID Sent to you through E-Mail </label>
                                                <select class="form-control" name="e_file_id" id="">
                                                    @foreach ($ids as $id)
                                                    <option value="{{ $id->e_file_id }}">{{ $id->e_file_id }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="final" type="checkbox" value="1" id="defaultCheck1" required>
                                                    <label class="form-check-label" for="defaultCheck1">
                                                    Affidavit / Declaration
                                                    </label>
                                                  </div>
                                            </div>
                                            <p>
                                                It is declared that i have completed my cliam submission successfully, All the documents and my cliam is totally correct and on the basis of truth, if there is anything found wrong or false, I will be responsible to obey the court order without any conditions.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-sm btn-primary">Save and Finished</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-about" role="tabpanel"
                aria-labelledby="nav-about-tab">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Case Title</th>
                        <th scope="col">Proceedings</th>
                        <th scope="col">EFID</th>
                        <th scope="col">Submission Time</th>
                        <th scope="col">Case Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach ($cases as $case)
                            <tr>
                                <th>{{ $count }}</th>
                                <td>{{ $case->full_name }} V/S {{ $case->fullname }}</td>
                                <td>
                                    <button type="submit" class="btn btn-success">View</button>
                                </td>
                                <td>{{ $case->e_file_id }}</td>
                                <td>{{ date('d-m-Y',strtotime($case->created_at)) }}</td>
                                <td>
                                    <button type="submit" class="btn btn-success">Pending</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
                            {{-- <form method="post" action="{{ route('upload-files') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Upload Files</label>
                                <input type="file" class="form-control" name="files[]" multiple required>
                                <small>Press Ctrl to select multiple Files</small>
                            </div>
                            <p class="text-center">
                                <button type="submit" class="btn btn-info">Upload</button>
                            </p>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


</div>

@endsection

@section('script')

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection