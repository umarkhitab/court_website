@extends('layouts.template')

@section('content')

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Registrar Message </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Update Registrar Message </li>
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
                    <div class="card-header"> <i class="mdi mdi-collection-plus"></i> Update Registrar Message
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6" style="margin-left:2em">
                                <form action="{{ route('registrar.update', $msg->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="form-group">
                                        <label>Message Title.</label>
                                        <input class="form-control" type="text" name="msg_title" required value="{{ $msg->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" id="summernote" required>{{ $msg->message }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Add Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <input type="hidden" name="old_img" value="{{ $msg->image }}">
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

<!-- include summernote css/js -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        $('#summernote').summernote();
    });
</script>

@endsection