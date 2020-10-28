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
                            <h4>List of Judicial Officers</h4>
                            <h6>District And Sessions Judge</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-fw-widget" id="example">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>§
                                        <th>Name Of Officer</th>
                                        <th>Designation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $count = 1;
                                    @endphp
                                    @foreach($officers as $off)
                                    <tr class="odd gradeX">
                                        <td>{{ $count }}</td>
                                        <td>
                                            <a href="{{ route('profile', $off->id) }}">
                                                {{ $off->name_of_judges }}
                                            </a>
                                        </td>
                                        <td>
                                            {!! $off->link !!}
                                        </td>
                                    </tr>
                                    @php
                                    $count++;
                                    @endphp
                                    @endforeach
                                </tbody>
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