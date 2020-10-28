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
                            <h2>Pleadings</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-fw-widget">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Pleadings</th>
                                        <th>View More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Civil Judicial Urdu Formats
                                        </td>
                                        <td><a href="{{ route('civil_judicial_urdu_formats') }}" class="btn btn-success">View Files</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            Criminal Judicial Urdu Formats
                                        </td>
                                        <td><a href="{{ route('criminal_judicial_urdu_formats') }}" class="btn btn-success">View Files</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            Judicial forms
                                        </td>
                                        <td><a href="{{ route('judicial_forms') }}" class="btn btn-success">View Files</a></td>
                                    </tr>
                                    <!-- <tr>
                                            <td>1</td>
                                            <td>Appeal</td>
                                            <td><a href="{{ route('fornt_appeal') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Civil Miscellaneous Applications and documents or forms of dcouments to be annexed</td>
                                            <td><a href="{{ route('front_civil_miscellaneous') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Criminal Miscellaneous Matters and documents or forms of dcouments to be annexed</td>
                                            <td><a href="{{ route('front_criminal_miscellaneous') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Different Forms used in the Courts</td>
                                            <td><a href="{{ route('front_diff_forms') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Family Court Suit and documents or forms of dcouments to be annexed</td>
                                            <td><a href="{{ route('front_family_court_suit') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Habeas Corpus Petition and documents or forms of dcouments to be annexed</td>
                                            <td><a href="{{ route('front_habeas_corpus') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Plaint and documents or forms of dcouments to be annexed</td>
                                            <td><a href="{{ route('front_plaint_and_documents') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Rent Petiton and documents or forms of dcouments to be annexed</td>
                                            <td><a href="{{ route('front_rent_petiton') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Revision Petition and documents or forms of dcouments to be annexed</td>
                                            <td><a href="{{ route('front_revision_petition') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Written Statement and documents or forms of dcouments to be annexed</td>
                                            <td><a href="{{ route('front_written_statement') }}" class="btn btn-success btn-sm">View</a></td>
                                        </tr> -->
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-9">
                    @foreach ($notes as $note)
                        {!! $note->note !!}
                    @endforeach
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