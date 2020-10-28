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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-header">
                                <h2>Files</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover table-fw-widget" id="table1">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Categories</th>
                                            <th>View More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dissolution of Marriage</td>
                                            <td><a href="{{ route('front_dissolution_of_marriage') }}" class="btn btn-success">View Files</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Guardianship Certificate</td>
                                            <td><a href="{{ route('front_guardianship_certificate') }}" class="btn btn-success">View Files</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jactitation of Marriage</td>
                                            <td><a href="{{ route('front_jactitation_of_marriage') }}" class="btn btn-success">View Files</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Maintenance</td>
                                            <td><a href="{{ route('front_maintenance') }}" class="btn btn-success">View Files</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Restitution of Conjugal Right</td>
                                            <td><a href="{{ route('font_restitution_of_conjugal_right') }}" class="btn btn-success">View Files</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Succession Certificate</td>
                                            <td><a href="{{ route('front_succession_certificate') }}" class="btn btn-success">View Files</a></td>
                                        </tr>
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