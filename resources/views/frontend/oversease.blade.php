@extends('layouts.frontend')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .fa {
        transform: scale(1.5, 1.5);
    }
</style>
@endsection

@section('content')



<div class="container-fluid mt-2">
    <div class="row">

        @include('includes.frontend_sidebar')

        <div class="col-lg-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-header">
                            <h2> Citizen Portal </h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li>
                                            Email: sessionscourt.southwaziristan@gmail.com
                                        </li>
                                        <li>
                                            Phone No. 0963-511511
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="col-sm-6">
                                    <b> Download File: </b> <a href="{{ asset('public/uploads/judge_images/رجسٹریشن فارم آن لائن مقدمہ.docx') }}">رجسٹریشن فارم آن لائن مقدمہ </a>
                                </div> --}}
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

@endsection