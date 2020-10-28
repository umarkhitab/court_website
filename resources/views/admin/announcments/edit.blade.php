@extends('layouts.template')

@section('styles')
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

@endsection

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Annoucements </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Update Annoucements </li>
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
                    <div class="card-header"> <i class="mdi mdi-collection-plus"></i> Update Annoucements
                        <div class="tools dropdown">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8" style="margin-left:2em">
                                <form action="{{ route('announcement.update',$annouc->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" id="summernote">{{ $annouc->message }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Add File</label>
                                        <input type="file" name="image" class="form-control">
                                        <input type="hidden" name="old_file" value="{{ $annouc->file }}">

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info"> Update</button>
                                    </div>
                                </form>
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

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        $('#summernote').summernote();
    });
</script>

@endsection