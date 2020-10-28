@extends('layouts.frontend')

@section('styles')

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
                                <h4>
                                Court Wise Staff</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list-group">
                                            @foreach($links as $link)
                                            <li class="list-group-item">
                                                <a href="{{ asset($link->file) }}">
                                                    {{ $link->title }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
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

@endsection