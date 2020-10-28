@extends('layouts.template')

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Edit Judicial Officer </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Edit Judicial Officer </li>
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
                        <i class="mdi mdi-format-list-bulleted"></i> Edit Judicial Officer
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 ml-5 mt-5">
                                <form action="{{ route('fortnightly.update', $for->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
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
                                            <option value="Fortnight Statements">Fortnight Statements</option>
                                            <option value="Monthly Statements">Monthly Statements</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="{{ $for->from_date }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="{{ $for->from_date }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="image" class="form-control">
                                        <input type="hidden" name="old_image" value="{{ $for->file }}">
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