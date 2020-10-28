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
                        <h4>Judgement & Orders</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('get_judgement_orders') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label> Select Option </label>
                                        <br>
                                        <input type="radio" name="option" value="Posted" checked="checked"> Posted
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="option" value="Transferred"> Transferred

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Select Judge </label>
                                        <select name="judge" class="form-control" id="">
                                            @foreach($judge_name as $j)
                                            <option value="{{ $j }}">{{ $j }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Select Category </label>
                                        <select name="category" class="form-control" id="">
                                            @foreach($category as $c)
                                            <option value="{{ $c->category }}">{{ $c->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Select Date </label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Enter Tagline</label>
                                        <input type="text" name="tagline" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Party One </label>
                                        <input type="text" name="party_one" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Party Two</label>
                                        <input type="text" name="party_two" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-sm-11 ml-3">
                            <table class="table table-striped table-hover table-fw-widget " id="example" style="margin-left:3em">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Party One</th>
                                        <th>Party Two</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($data)
                                    @foreach($data as $d)
                                    <tr>
                                        <td>
                                            {{ $d->id }}
                                        </td>
                                        <td>
                                            {{ $d->party_one }}
                                        </td>
                                        <td>
                                            {{ $d->party_two }}
                                        </td>
                                        <td>
                                            {{ $d->category }}
                                        </td>
                                        <td>
                                            {{ date('m-d-Y',strtotime($d->date)) }}
                                        </td>
                                        <td>
                                            <a href="{{ asset($d->file)  }}">
                                                Download
                                            </a>
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