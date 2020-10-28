@extends('layouts.template')

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Edit Cause List </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Edit Cause List </li>
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
                        <i class="mdi mdi-format-list-bulleted"></i> Edit Cause List
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 ml-5 mt-5">
                                <form action="{{ route('causelist.update', $cause->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label>Select Link</label>
                                        <select class="form-control" name="judge_id">
                                            @foreach($officers as $f)
                                            <option value="{{ $f->id }}">{{ $f->name_of_judges }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="date" value="{{ $cause->date }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="image" class="form-control">
                                        <input type="hidden" name="old_image" value="{{ $cause->file  }}">
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