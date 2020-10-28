@extends('layouts.frontend')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Following two stylesheets added for table related bootstrap by UMAR-->
<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css' ) }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css' ) }}" />

<style>
    .fa {
        transform: scale(1.5, 1.5);
    }
    .center{
        text-align: center;
    }
</style>
@endsection

@section('content')

<div class="container-fluid mt-2">
    <div class="row">
        

        @include('includes.frontend_sidebar')

        <div class="col-lg-6">
            <div class="jumbotron" style="padding:1rem 1rem; background-color:#e9ecef">
                <div class="row">
                    <div class="col-sm-3">
                        @if(!empty($chief_justice_message->image))
                        <img src="{{ 'public/'.$chief_justice_message->image }}" alt="" width="100%" height="150">
                        @endif
                    </div>
                    <div class="col-sm-9">
                        <h4>
                            @if(!empty($chief_justice_message->image))
                            {{ $chief_justice_message->title }}
                            @endif
                        </h4>
                        <p>
                            <h6>
                                {!! $chief_justice_message->message !!}
                            </h6>
                        </p>
                    </div>
                </div>
            </div>
            <div class="jumbotron" style="padding:1rem 1rem;background-color:#e9ecef">
                <div class="row">
                    <div class="col-sm-3">
                        @if(!empty($registrar_message->image))
                        <img src="{{ 'public/'.$registrar_message->image }}" alt="" width="100%" height="150">
                        @endif
                    </div>
                    <div class="col-sm-9">
                        <h4>
                            @if(!empty($registrar_message->image))
                            {{ $registrar_message->title }}
                            @endif
                        </h4>
                        <p>
                            <h6>
                                {!! $registrar_message->message !!}
                            </h6>
                        </p>
                    </div>
                </div>
            </div>
            <div class="jumbotron" style="padding:1rem 1rem;background-color:#e9ecef">
                <div class="row">
                    <div class="col-sm-3">
                        @if(!empty($message->image))
                        <img src="{{ 'public/'.$message->image }}" alt="" width="100%" height="150">
                        @endif
                    </div>
                    <div class="col-sm-9">
                        <h4>
                            @if(!empty($message->image))
                            {{ $message->message_title }}
                            @endif
                        </h4>
                        <p>
                            <h6>
                                {!! $message->message !!}
                            </h6>
                        </p>
                    </div>
                </div>
            </div>
 
            <div class="row">
                <div class="col-sm-9">
                    @if(count($lists) > 0)
                    @foreach($lists as $list)
                    <div>
                        <img src="{{ asset('public/'.$list->image) }}" alt="" width="100%" height="100">
                        @if($list->id == 3)
                        <p> <a href="{{ route('cause-list') }}"> {!! $list->desc !!} </a> </p>
                        @else
                        <p> <a href="{{ route('fornt_pleadings') }}"> {!! $list->desc !!} </a> </p>
                        @endif
                    </div>
                    @endforeach
                    @else
                    Not Found
                    @endif
                </div>
                {{-- <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header" style="background-color:#F8F2DD">
                            <h5 class="text-center"><i class="fa fa-bullhorn" aria-hidden="true"></i> Announcements </h5>
                        </div>
                        <div class="card-body">
                            @if(count($annoucments) > 0)
                            @foreach($annoucments as $annoucments)
                            <p class="card-text">
                                <marquee direction="up" loop="" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
                                    {!! $annoucments->message !!}
                                    <a href="{{ asset($annoucments->file) }}">
                                        View
                                    </a>
                                    <hr>
                                </marquee>
                            </p>
                            @endforeach
                            @else
                            Not Found
                            @endif
                        </div>
                    </div>
                </div>
     
                <div class="col-sm-4">
                    
                </div> --}}
            </div>
        </div>
        <!---Edited by Umar Khitab for adding Lattest Events layout--->

        <div class="col-lg-3">
             <div class="jumbotron" style="padding:0.2rem 0.2rem; color:#e9ecef">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <table class="table table-striped table-hover table-fw-widget" id="table">
                                    <thead>        
                                        <th class="center">Lattest Events</th>    
                                    </thead>
                                    <tbody>
                                        {{ csrf_field() }}
                                         <?php  $no=1; ?>
                                         @foreach($event as $value)
                                         <tr class="event{{$value->id}}">
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $value->titlw }}</td>
                                            <td>
                                                <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-title="{{$value->titlw}}" data-description="{{$value->description}}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$event->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

    </div>
</div>

<!-- Head Expenses Modal Added by UMAR KHITAB ON 29.09.2020-->
{{-- Modal Form Show POST --}}
<div id="show" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p> Title: {{$event->titlw}} </p>
                    <b id="i"/>
                </div>
                <div class="form-group">
                    <label for="">Title :</label>
                        <b id="ti"/>
                </div>
                <div class="form-group">
                    <label for="">Body :</label>
                        <b id="by"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-earning" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span>Close
                </button>
        </div>
    </div>
</div>



@endsection

@section('script')
<script type="text/javascript">
// Show function
$(document).on('click', '.show-modal', function() {
  $('#show').modal('show');
  $('#i').text($(this).data('id'));
  $('#ti').text($(this).data('titlw'));
  $('#by').text($(this).data('description'));
  $('.modal-title').text('Show Post');
  });
</script>

@endsection