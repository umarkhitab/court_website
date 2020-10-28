<!----- THIS FILE IS OF NO USE........-->


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
                <div class="jumbotron" style="padding:1rem 1rem;background-color:#F8F2DD">
                    <div class="row">
                        <div class="col-sm-3">
                            @if(!empty($message->image))
                            <img src="{{ asset('public/'.$message->image) }}" alt="" width="200">
                            @endif
                        </div>
                        <div class="col-sm-9">
                            <h4>
                                @if(!empty($message->image))
                                {{ $message->message_title }}
                                @endif
                            </h4>
                            <p class="hide_msg">
                                @if(!empty($message->message))
                                {!! $message->message !!}
                                @endif
                            </p>
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