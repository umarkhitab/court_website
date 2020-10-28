@extends('layouts.template')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css' ) }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css' ) }}" />

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

@endsection

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Pleadings </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Add Pleadings </li>
            </ol>
        </nav>
    </div>
    <div class="main-content container-fluid">
        @if ($message = Session::get('success'))
        <div class="alert alert-contrast alert-success alert-dismissible" role="alert">
            <div class="icon"><span class="mdi mdi-check"></span></div>
            <div class="message">
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button><strong> {{ $message }} </strong>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-header"> <i class="mdi mdi-format-list-bulleted"></i> All Pleadings
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Pleadings</th>
                                    <th>View More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        Civil Judicial Urdu Formats
                                    </td>
                                    <td><a href="{{ route('civil-judicial-urdu-formats') }}" class="btn btn-success">Upload FIles</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        Criminal Judicial Urdu Formats
                                    </td>
                                    <td><a href="{{ route('criminal-judicial-urdu-formats') }}" class="btn btn-success">Upload Files</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        Judicial forms
                                    </td>
                                    <td><a href="{{ route('judicial-forms') }}" class="btn btn-success">Upload Files</a></td>
                                </tr>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>
                                        Appeal
                                    </td>
                                    <td><a href="{{ route('appeal') }}" class="btn btn-success">View</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Civil Miscellaneous Applications and documents or forms of dcouments to be annexed</td>
                                    <td><a href="{{ route('civil_miscellaneous_applications') }}" class="btn btn-success">View</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Criminal Miscellaneous Matters and documents or forms of dcouments to be annexed</td>
                                    <td><a href="{{ route('criminal_miscellaneous_matters') }}" class="btn btn-success">View</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Different Forms used in the Courts</td>
                                    <td><a href="{{ route('different_forms') }}" class="btn btn-success">View</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Family Court Suit and documents or forms of dcouments to be annexed</td>
                                    <td><a href="{{ route('family_court_suit') }}" class="btn btn-success">View</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Habeas Corpus Petition and documents or forms of dcouments to be annexed</td>
                                    <td><a href="{{ route('habeas_corpus_petition') }}" class="btn btn-success">View</a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Plaint and documents or forms of dcouments to be annexed</td>
                                    <td><a href="{{ route('plaint_and_documents') }}" class="btn btn-success">View</a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Rent Petiton and documents or forms of dcouments to be annexed</td>
                                    <td><a href="{{ route('rent_petiton') }}" class="btn btn-success">View</a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Revision Petition and documents or forms of dcouments to be annexed</td>
                                    <td><a href="{{ route('revision_petition') }}" class="btn btn-success">View</a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Written Statement and documents or forms of dcouments to be annexed</td>
                                    <td><a href="{{ route('written_statement') }}" class="btn btn-success">View</a></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Head Expenses Modal -->
<div class="modal fade colored-header colored-header-primary" id="form-bp1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-colored">
                <h3 class="modal-title"><i class="mdi mdi-collection-plus"></i> Add Pleading</h3>
                <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pleadings.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Add Pleading</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary md-close" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Proceed</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection


@section('script')

<script src="{{ asset('public/assets/lib/datatables/datatables.net/js/jquery.dataTables.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js ') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js ') }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/jszip/jszip.min.js ' ) }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/pdfmake/pdfmake.min.js ' ) }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/pdfmake/vfs_fonts.js ' ) }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js ' ) }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js ' ) }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js ' ) }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js ' ) }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js ' ) }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js ' ) }}" type="text/javascript"></script>
<script src="{{ asset('public/assets/js/app-tables-datatables.js' ) }}" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        App.dataTables();
        $('#summernote').summernote();
    });
</script>

@endsection