@extends('layouts.template')

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Update Title </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Update Title </li>
            </ol>
        </nav>
    </div>
    <div class="main-content container-fluid">

        <div class="row">
            <div class="col-sm-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-contrast alert-success alert-dismissible" role="alert">
                    <div class="icon"><span class="mdi mdi-check"></span></div>
                    <div class="message">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                                class="mdi mdi-close" aria-hidden="true"></span></button><strong> {{ $message }}
                        </strong>
                    </div>
                </div>
                @endif
                <div class="card card-table">
                    <div class="card-header"> <i class="mdi mdi-collection-plus"></i> Update Title
                        <div class="tools dropdown">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8" style="margin-left:2em">
                                <form action="{{ route('pic_titles.update',$title->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="form-group">
                                        <input type="text" name="title" value="{{ $title->titles }}"
                                            class="form-control">
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