@extends('layouts.template')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css' ) }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css' ) }}" />

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

@endsection

@section('content')

<div class="be-content">
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
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Categories</th>
                                    <th>View More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dissolution of Marriage</td>
                                    <td><a href="{{ route('dissolution_of_marriage') }}" class="btn btn-success">Upload Files</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Guardianship Certificate</td>
                                    <td><a href="{{ route('guardianship_certificate') }}" class="btn btn-success">Upload Files</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jactitation of Marriage</td>
                                    <td><a href="{{ route('jactitation_of_marriage') }}" class="btn btn-success">Upload Files</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Maintenance</td>
                                    <td><a href="{{ route('maintenance') }}" class="btn btn-success">Upload Files</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Restitution of Conjugal Right</td>
                                    <td><a href="{{ route('restitution_of_conjugal_right') }}" class="btn btn-success">Upload Files</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Succession Certificate</td>
                                    <td><a href="{{ route('succession_certificate') }}" class="btn btn-success">Upload Files</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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