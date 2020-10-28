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
                                Gallery Images
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($pictures as $picture)
                                <div class="col-sm-3">
                                    <a href="{{ $picture->images }}">
                                        <img src="{{ $picture->images }}" alt="" width="100%" height="250">
                                    </a>
                                </div>
                                @endforeach
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