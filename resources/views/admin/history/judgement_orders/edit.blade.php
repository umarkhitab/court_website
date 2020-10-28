@extends('layouts.template')

@section('content')
<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title"> Edit Judgement & Orders </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Edit Judgement & Orders </li>
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
                        <i class="mdi mdi-format-list-bulleted"></i> Edit Judgement & Orders
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 ml-5 mt-5">
                                <form action="{{ route('judgemental.update', $judgement->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label> Select Option </label>
                                        <br>
                                        <input type="radio" name="option" value="Posted" checked="checked"> Posted
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="option" value="Transferred"> Transferred

                                    </div>
                                    <div class="form-group">
                                        <label> Select Judge </label>
                                        <select name="judge_name" id="" class="form-control">
                                            @foreach($all_judges as $all)
                                            <option value="{{ $all }}">{{ $all }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label> Enter Category </label>
                                        <input type="text" name="category" value="{{ $judgement->category }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Date</label>
                                        <input type="date" name="date" class="form-control" value="{{ $judgement->date }}"  required>
                                    </div>
                                    <div class="form-group">
                                        <label> Enter Tagline </label>
                                        <input type="text" name="tagline" class="form-control" value="{{ $judgement->tagline }}"  required>
                                    </div>
                                    <div class="form-group">
                                        <label> Party One </label>
                                        <input type="text" name="party_one" class="form-control" value="{{ $judgement->party_one }}"  required>
                                    </div>
                                    <div class="form-group">
                                        <label> Party Two </label>
                                        <input type="text" name="party_two" class="form-control" value="{{ $judgement->party_two }}"  required>
                                    </div>
                                    <div class="form-group">
                                        <label> Upload File </label>
                                        <input type="file" name="file" class="form-control">
                                        <input type="hidden" name="old_file" class="form-control" value="{{ $judgement->file }}" required>
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