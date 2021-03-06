@extends('layouts.template')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css' ) }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css' ) }}" />
@endsection

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">List of Preiodical Statment </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">List of Preiodical Statment </li>
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
                    <div class="card-header"> <i class="mdi mdi-format-list-bulleted"></i> List of Preiodical Statment
                        <div class="tools dropdown">
                            <button class="btn btn-rounded btn-space btn-primary" data-toggle="modal" data-target="#form-bp1">
                                Add Preiodical Statment
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-fw-widget" id="table1">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fortnight as $officer)
                                <tr class="odd gradeX">
                                    <td>
                                        {{ $officer->id }}
                                    </td>
                                    <td>
                                        {{ $officer->category }}
                                    </td>
                                    <td>
                                        {{ $officer->description }}
                                    </td>
                                    <td>
                                        {{ $officer->from_date }}
                                    </td>
                                    <td>
                                        {{ $officer->to_date }}
                                    </td>
                                    <td>
                                        <a href="{{ asset($officer->file) }}">
                                            View File
                                        </a>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <a href="{{ route('fortnightly.edit', $officer->for_id) }}" class="btn btn-rounded btn-space btn-info btn-xs">
                                                    edit
                                                </a>
                                            </div>
                                            <div class="col-xs-3">
                                                <form action="{{ route('fortnightly.destroy',$officer->for_id) }}" method="POST">
                                                    {{ method_field('DELETE') }}
                                                    {!! csrf_field() !!}
                                                    <button class="btn btn-rounded btn-space btn-danger btn-xs"> delete </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
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
                <h3 class="modal-title"><i class="mdi mdi-collection-plus"></i> Add Fortnight Statements</h3>
                <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"> </span></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('fortnightly.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Select Link</label>
                        <select class="form-control" name="cat_id">
                            @foreach($links as $link)
                            <option value="{{ $link->id }}">{{ $link->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description(Type)</label>
                        <select class="form-control" name="type">
                            <option value="Fortnight Statements">Fortnightly Statements</option>
                            <option value="Monthly Statements">Monthly Statements</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>From Date</label>
                        <input type="date" name="from_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>To Date</label>
                        <input type="date" name="to_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="image" class="form-control" required>
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
<script src="{{ asset('public/assets/js/app-tables-datatables.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        App.dataTables();
    });
</script>

@endsection