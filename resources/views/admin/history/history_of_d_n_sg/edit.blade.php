@extends('layouts.template')

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Banners </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Edit History of D&SJ </li>
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
                        <i class="mdi mdi-format-list-bulleted"></i>Edit History of D&SJ
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 ml-5 mt-5">
                                <form action="{{ route('history.update', $history->id) }}" method="post" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label>Name of Officer</label>
                                        <input type="text" name="name_of_officer" class="form-control" value="{{ $history->name_of_officer }}" required>
                                    </div>
                                    <div class="form-group ">
                                        <label> From </label>
                                        <input type="date" class="form-control" name="from" value="{{ $history->from }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>To</label>
                                        <input type="date" name="to" class="form-control" value="{{ $history->to }}" required>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Proceed</button>
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