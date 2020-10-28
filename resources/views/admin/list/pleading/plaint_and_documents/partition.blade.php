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
                    <div class="card-header"> <i class="mdi mdi-format-list-bulleted"></i> Upload Files
                        <div class="tools dropdown">
                            <button class="btn btn-rounded btn-space btn-primary" data-toggle="modal" data-target="#form-bp1">Upload Files</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Files</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($files as $f)
                                <tr>
                                    <td>{{ $f->id }}</td>
                                    <td><a href="{{ asset($f->file) }}">View File</a></td>
                                </tr>
                                @endforeach
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
                <h3 class="modal-title"><i class="mdi mdi-collection-plus"></i> Upload</h3>
                <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('up_partition') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Upload Files</label>
                        <input type="file" name="file" class="form-control" required>
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
