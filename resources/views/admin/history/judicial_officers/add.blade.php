@extends('layouts.template')

@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection

@section('content')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">List of Judicial Officers </h2>
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">List of Judicial Officers </li>
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
                    <div class="card-header"> <i class="mdi mdi-format-list-bulleted"></i> List of Judicial Officers

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10 offset-sm-1">
                                <form action="{{ route('judofficers.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Select Type</label>
                                        <select class="form-control" name="type" required>
                                            <option value="">Select Judicial Officer Type</option>
                                            <option value="first_ever_officers">First Ever Judicial Officer</option>
                                            <option value="current_officers">Current Judidial officers</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Title</label>
                                        <select class="form-control" name="jud_officers_id">
                                            @foreach($links as $link)
                                            <option value="{{ $link->id }}">{{ $link->link }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Add Profile Photo</label>
                                        <input type="file" name="photo" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Judge Name</label>
                                        <input type="text" name="name_of_judges" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Brith</label>
                                        <input type="date" name="dob" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Place of Brith</label>
                                        <input type="text" name="place_of_brith" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <textarea name="qualification" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Practice Period</label>
                                        <textarea name="practice_period" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Place of Posting</label>
                                        <input type="text" name="place_of_posting" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Detail</label>
                                        <textarea name="service_detail" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Honour</label>
                                        <textarea name="honour" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <textarea name="experience" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Skills</label>
                                        <textarea name="skills" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Activities and Achievements</label>
                                        <textarea name="activities_and_achievments" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Appreciation</label>
                                        <textarea name="appreciation" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Courses/Workshops</label>
                                        <textarea name="courses_workshops" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Training Imparted</label>
                                        <textarea name="Training_imparted" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Books Published</label>
                                        <textarea name="books_published" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Books to be published</label>
                                        <textarea name="books_to_be_publish" class="summernote"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary" type="submit"> + Add</button>
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

@endsection


@section('script')

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        //-initialize the javascript
        $('.summernote').summernote();
    });
</script>

@endsection