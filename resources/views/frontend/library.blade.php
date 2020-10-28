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
                <div class="card-header"> <h4>   Library</h4>
                </div>
                <div class="card-body">
                </div>
                <div class="row">
                    <div class="col-sm-11 ml-3">
                        <table class="table table-striped table-hover table-fw-widget " id="example"
                            >
                            <thead>
                                <tr>
                                    <th>Folder </th>
                                    {{-- <th>Type</th>
                                    <th>Author/Editor</th>
                                    <th>Subject/Topic</th>
                                    <th>Pages</th>
                                    <th>Publish Date</th>
                                    <th>Publisher</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($libraries as $library)
                                <tr>
                                    <td> <a href="{{ $library->file }}">{{ $library->title }} </a></td>
                                    {{-- <td>{{ $library->type }}</td>
                                    <td>{{ $library->auther }}</td>
                                    <td>{{ $library->subject }}</td>
                                    <td>{{ $library->pages }}</td>
                                    <td>{{ $library->publish_date }}</td>
                                    <td>{{ $library->publisher }}</td> --}}
                                    
                                </tr>
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