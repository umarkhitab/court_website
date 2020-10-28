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
                        <h4>FIR</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('get_fir') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label> Select Police Station </label>
                                        <select name="station" class="form-control" id="">
                                            <option value="" disabled>Select Judge</option>
                                            @foreach($police_station as $p)
                                            <option value="{{ $p->id }}">{{ $p->police_station_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Select Date</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Enter FIR No</label>
                                        <input type="text" name="fir_no" class="form-control" placeholder="Enter FIR No">
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-sm-11 ml-2">
                            <table class="table table-striped table-hover table-fw-widget " id="example" style="margin-left:3em">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Police Station Name</th>
                                        <th>Person Name</th>
                                        <th>Fir No</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($fir)
                                    @foreach($fir as $s)
                                    <tr>
                                        <td>
                                            {{ $s->id }}
                                        </td>
                                        <td>
                                            {{ $s->police_station_name }}
                                        </td>
                                        <td>
                                            {{ $s->name }}
                                        </td>
                                        <td>
                                            {{ $s->fir_no }}
                                        </td>
                                        <td>
                                            {{ date('m-d-Y',strtotime($s->date)) }}
                                        </td>
                                    </tr>
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