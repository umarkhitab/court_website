@extends('layouts.template')

@section('content')

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Library </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Update Library </li>
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
                    <div class="card-header"> <i class="mdi mdi-collection-plus"></i> Update Library
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6" style="margin-left:2em">
                                <form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label>Title</label>
                                    <textarea name="title" class="form-control" rows="2" required>{{ $article->title }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Author</label>
                                        <input name="author" type="text" class="form-control" rows="4" value="{{ $article->author }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Add File/Link</label>
                                        <input type="file" name="file" class="form-control">
                                        <input type="hidden" name="oldfile" value="{{ $article->link }}">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Update</button>
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