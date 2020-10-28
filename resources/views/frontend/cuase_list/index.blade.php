@extends('layouts.frontend')

@section('styles')

<style href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></style>
<style href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></style>


@endsection

@section('content')

<div class="container-fluid mt-2">
    <div class="row">
        @include('includes.frontend_sidebar')
        <div class="col-lg-9">

            <div class="card card-table">
                <div class="card-header">
                    <h4>CauseList</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('get-cause-list') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> Select Judge </label>
                                    <select name="judge" class="form-control" id="">
                                        <option value="" disabled>Select Judge</option>
                                        @foreach($judge as $j)
                                        <option value="{{ $j->id }}">{{ $j->name_of_judges }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary float-right"><i class="fa fa-search"
                                        aria-hidden="true"></i> Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-11 ml-3">
                        <table class="table table-striped table-hover table-fw-widget " id="example"
                            style="margin-left:3em">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Date</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($staff)
                                @php
                                $count = 1;
                                @endphp
                                @foreach($staff as $s)
                                <tr>
                                    <td>
                                        {{ $count }}
                                    </td>
                                    <td>
                                        {{ date('m-d-Y',strtotime($s->date)) }}

                                    </td>
                                    <td>
                                        <a href="{{ asset($s->file)  }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                @php
                                $count++;
                                @endphp
                                @endforeach
                                @endisset
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