@extends('layouts.frontend')

@section('styles')

<style href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></style>
<style href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></style>


@endsection

@section('content')

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</link>

<div class="container-fluid mt-2">
    <div class="row">
        @include('includes.frontend_sidebar')
        <div class="col-lg-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-header">
                            <h4> Profile </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-fw-widget">
                                <tr>
                                    <th>NAME</th>
                                    <td>{{ $officer->name_of_judges }}</td>
                                    <td rowspan="5">
                                        <img src="{{ asset($officer->photo) }}" alt="" width="50%">
                                    </td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <th>DATE OF BIRTH </th>
                                    <td>{{ date('m-d-Y',strtotime($officer->dob)) }}</td>
                                </tr>
                                <tr>
                                    <th>PLACE OF BIRTH</th>
                                    <td>{{ $officer->place_of_brith }}</td>
                                </tr>
                                <tr>
                                    <th>QUALIFICATION</th>
                                    <td>{!! $officer->qualification !!}</td>
                                </tr>
                                @if (!empty($officer->practice_period ))
                                <tr>
                                    <th>PRACTICE PERIOD</th>
                                    <td>{!! $officer->practice_period !!}</td>
                                </tr>
                                @endif

                                @if(!empty($officer->service_detail ))
                                <tr>
                                    <th>SERVICE DETAIL</th>
                                    <td>{!! $officer->service_detail !!}</td>
                                </tr>
                                @endif

                                @if (!empty($officer->place_of_posting))
                                <tr>
                                    <th>PLACE OF POSTING</th>
                                    <td>{!! $officer->place_of_posting !!}</td>
                                </tr>
                                @endif
                                
                                @if (!empty($officer->honour))
                                <tr>
                                    <th>HONOUR</th>
                                    <td>{!! $officer->honour !!}</td>
                                </tr>
                                @endif

                                @if (!empty($officer->appreciation))
                                <tr>
                                    <th>APPRECIATION</th>
                                    <td>{!! $officer->appreciation !!}</td>
                                </tr>
                                @endif

                                @if (!empty($officer->courses_workshops))
                                <tr>
                                    <th>COURSES/WORKSHOPS</th>
                                    <td>{!! $officer->courses_workshops !!}</td>
                                </tr>
                                @endif

                                @if (!empty($officer->experience))
                                <tr>
                                    <th>Experience</th>
                                    <td>{!! $officer->experience !!}</td>
                                </tr>
                                @endif

                                @if (!empty($officer->skills))
                                <tr>
                                    <th>Skills</th>
                                    <td>{!! $officer->skills !!}</td>
                                </tr>
                                @endif

                                @if (!empty($officer->activities_and_achievments))
                                <tr>    
                                    <th>Activities and Achievments</th>
                                    <td>{!! $officer->activities_and_achievments !!}</td>
                                </tr>
                                @endif

                                @if (!empty($officer->Training_imparted))
                                <tr>
                                    <th>Training Imparted</th>
                                    <td>{!! $officer->Training_imparted !!}</td>
                                </tr>
                                @endif

                                @if (!empty($officer->books_published))
                                <tr>
                                    <th>Books Published</th>
                                    <td>{!! $officer->books_published !!}</td>
                                </tr>
                                @endif

                                @if (!empty($officer->books_to_be_publish))
                                <tr>
                                    <th>Books To Be Publish</th>
                                    <td>{!! $officer->books_to_be_publish !!}</td>
                                </tr>
                                @endif

                            </table>
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

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection