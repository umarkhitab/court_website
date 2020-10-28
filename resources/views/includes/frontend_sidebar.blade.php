<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .fa {
        transform: scale(1.5, 1.5);
    }
</style>
<div class="col-lg-3">
    <div class="accordion mb-2" id="accordionExample">
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    <a href="{{ url('/') }}">
                        <span><i class="fa fa-home" aria-hidden="true"></i> Home</span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    <a href="{{ route('court-history') }}">
                        <span><i class="fa fa-history" aria-hidden="true"></i> History of District</span>
                    </a>
                </h2>
            </div>
        </div>
        {{-- <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span><i class="fa fa-history" aria-hidden="true"></i> History</span>
                        <i class="fa fa-chevron-down toggle rotate"></i>
                    </a>
                </h2>
            </div>
            
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('court-history') }}"> History of District</a></li>
                        <li class="list-group-item"><a href="{{ route('history_sdj') }}"> History of D & SJ</a></li>
                        <li class="list-group-item"><a href="{{ route('history_scjs') }}"> History of SCJ (Administration) </a></li>
                        <li class="list-group-item"><a href="{{ route('history_scj_juds') }}"> History of SCJ (JUDICIAL)</a></li>
                        <li class="list-group-item"><a href="{{ route('history_scj_gurds') }}"> History of SCJ (GUARDIAN)</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
        {{-- <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    <a href=" {{ route('links') }} ">
                        <span><i class="fa fa-male" aria-hidden="true"></i> Judicial Officer</span>
                    </a>
                </h2>
            </div>
        </div> --}}
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span><i class="fa fa-user" aria-hidden="true"></i> Judicial Officer</span>
                        <i class="fa fa-chevron-down toggle rotate"></i>
                    </a>
                </h2>
            </div>
            
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('links', ['type' => 'first_ever_officers']) }}"> First Ever Judicial officers</a></li>
                        <li class="list-group-item"><a href="{{ route('links', ['type' => 'current_officers']) }}"> Current Judicial officers</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    <a href="{{ route('case-managment') }}">
                        <span><i class="fa fa-outdent" aria-hidden="true"></i> Court & Case Management Plan</span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span><i class="fa fa-male" aria-hidden="true"></i> Judicial Staff</span>
                        <i class="fa fa-chevron-down toggle"></i>
                    </a>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('cat-staff-links') }}"> Category Wise Staff</a></li>
                        <li class="list-group-item"><a href="{{ route('court-staff') }}"> Court Wise Staff</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    <a href="{{ route('judgement_orders') }}">
                        <span><i class="fa fa-first-order" aria-hidden="true"></i> Judgement & Orders</span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span><i class="fa fa-sign-language" aria-hidden="true"></i>Periodical Statement</span>
                        <i class="fa fa-chevron-down toggle"></i>
                    </a>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('fortightly-statements') }}"> Fortnightly Statements</a></li>
                        <li class="list-group-item"><a href="{{ route('monthly-statements') }}"> Monthly Statements</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        <span><i class="fa fa-address-book" aria-hidden="true"></i>Case Information</span>
                        <i class="fa fa-chevron-down toggle"></i>
                    </a>
                </h2>
            </div>
            <div id="collapsefive" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('cause-list') }}"> Cause List</a></li>
                        <li class="list-group-item"><a href="{{ route('fir') }}"> Search by FIR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        <span><i class="fa fa-bell" aria-hidden="true"></i> Notifications & Jobs</span>
                        <i class="fa fa-chevron-down toggle"></i>
                    </a>
                </h2>
            </div>
            <div id="collapsesix" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('notifications') }}"> Notifications</a></li>
                        <li class="list-group-item"><a href="{{ route('jobs') }}"> Jobs</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#gallery" aria-expanded="false" aria-controls="gallery">
                        <span><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery </span>
                        <i class="fa fa-chevron-down toggle"></i>
                    </a>
                </h2>
            </div>
            <div id="gallery" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('picture-gallery-title') }}"> Images</a></li>
                        <li class="list-group-item"><a href="{{ route('video-gallery-title') }}"> Videos </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    <a href="{{ route('library_data') }}">
                        <i class="fa fa-book" aria-hidden="true"></i> Library </span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    <a href="{{ route('published_articels') }}">
                        <span><i class="fa fa-file" aria-hidden="true"></i> Research Articles </span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        <span><i class="fa fa-cloud-download" aria-hidden="true"></i> Downloads</span>
                        <i class="fa fa-chevron-down toggle"></i>
                    </a>
                </h2>
            </div>
            <div id="collapseseven" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('fornt_pleadings') }}"> Judicial Forms</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#e-file" aria-expanded="false" aria-controls="e-file">
                        <span><i class="fa fa-file" aria-hidden="true"></i> E-Filing</span>
                        <i class="fa fa-chevron-down toggle"></i>
                    </a>
                </h2>
            </div>
            <div id="e-file" class="collapse" aria-labelledby="e-file" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('e-file-steps') }}"> E-File Submission </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="e-file" class="collapse" aria-labelledby="e-file" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="{{ route('sign-in') }}"> E-File Login </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    <a href="{{ route('related-links') }}">
                        <span><i class="fa fa-link" aria-hidden="true"></i> Related Links</span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    <a href="{{ route('overseas-pakistan') }}">
                        <span><i class="fa fa-link" aria-hidden="true"></i> Citizen Portal</span>
                    </a>
                </h2>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        <span><i class="fa fa-users" aria-hidden="true"></i> About Us</span>
                        <i class="fa fa-chevron-down toggle"></i>
                    </a>
                </h2>
            </div>
            <div id="collapseeight" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#"> Contact Us</a></li>
                        <li class="list-group-item"><a href="#"> Location & Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>