@extends('layouts.template')

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Edit job </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Edit Picture Gallery </li>
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
                        <i class="mdi mdi-format-list-bulleted"></i> Edit Picture Gallery
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 ml-5 mt-5">
                                <form action="{{ route('pic.update', $pic->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ $pic->title }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Job Description</label>
                                        <textarea name="desc" rows="5" class="form-control" required>{{ $pic->gallery_desc }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="image[]" class="form-control" multiple>
                                        <input type="hidden" name="old_images" value="{{ $pic->images }}">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Update</button>
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