@extends('layouts.template')

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Edit Video </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Edit Video Gallery </li>
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
                    <div class="card-header">
                        <i class="mdi mdi-format-list-bulleted"></i> Edit Video Gallery
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 ml-5 mt-5">
                                <form action="{{ route('video.update', $video->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $video->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Add Description</label>
                                        <textarea name="desc" rows="5" class="form-control">{{ $video->gallery_desc }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Add Video</label>
                                        <input type="text" name="video" value="{{ $video->videos }}" class="form-control">
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


@endsection