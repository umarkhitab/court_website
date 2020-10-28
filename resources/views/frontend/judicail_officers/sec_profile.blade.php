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
                            <table class="table table-striped table-hover table-fw-widget">
                                <tr>
                                    <th>NAME</th>
                                    <td>{{ $officer->name_of_judges }}</td>
                                    <td rowspan="5">
                                    <img src="{{ asset($officer->photo) }}" alt="" width="100%">
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

                                <tr>
                                    <th>PRACTICE PERIOD</th>
                                    <td>{!! $officer->practice_period !!}</td>
                                </tr>
                                <tr>
                                    <th>SERVICE DETAIL</th>
                                    <td>{!! $officer->service_detail !!}</td>
                                </tr>
                                <tr>
                                    <th>PLACE OF POSTING</th>
                                    <td>{!! $officer->place_of_posting !!}</td>
                                </tr>
                                <tr>
                                    <th>Experience</th>
                                    <td>{!! $officer->experience !!}</td>
                                </tr>
                                <tr>
                                    <th>Skills</th>
                                    <td>{!! $officer->skills !!}</td>
                                </tr>
                                <tr>
                                    <th>Activities and Achievements</th>
                                    <td>
                                        <ul>
                                            <li>
                                                Topped the examination of Additional District & Sessions Judges in 2001.
                                            </li>
                                            <li>
                                                Position holder in LLM
                                            </li>
                                            <li>
                                                Received appreciation Shield from Hon’ble Chief Justice Peshawar High Court as incentive & reward for disposal of maximum number of cases in the region comprising DIKhan, Bannu, Tank & Karak Districts.
                                            </li>
                                            <li>
                                                Got training in judgment writing at KPK Judicial Academy, Peshawar.
                                            </li>
                                            <li>
                                                Got training of Trainers at KPK Judicial Academy, Peshawar.
                                            </li>
                                            <li>
                                                Got training on Sessions Trials at Federal Judicial Academy, Islamabad.
                                            </li>
                                            <li>
                                                Secured first position in essay writing competition at the Federal Judicial Academy published in the bulletin of the Academy.
                                            </li>
                                            <li>
                                                Draft Rules for copying branch of lower courts.
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Appreciation</th>
                                    <td>
                                        <ol>
                                            <li>
                                                Received appreciation shield from honourable Chief Justice, Peshawar High Court for disposal of maximum number of cases in the region comprising DIKhan, Bannu, Tank & Karak Districts. (2013)
                                            </li>
                                            <li>
                                                Received certificate and one-month salary from honourable the Chief Justice Peshawar High Court in recognition of better performance and higher disposal. (December, 2017)
                                            </li>
                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Courses/Workshops</th>
                                    <td>
                                        <ul>
                                            <li>
                                                Got training in judgment writing at KPK Judicial Academy, Peshawar
                                            </li>
                                            <li>
                                                Got training of Trainers at KPK Judicial Academy, Peshawar.
                                            </li>
                                            <li>
                                                Got training on Sessions Trials at Federal Judicial Academy, Islamabad.
                                            </li>
                                            <li>
                                                Secured first position in essay writing competition at the Federal Judicial Academy published in the bulletin of the Academy.
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Training Imparted</th>
                                    <td>
                                        <ol>
                                            <li>
                                                Imparted training on the Civil Procedure Code Management Rules and the members of the District Judiciary of the Bar Association in seven Southern Districts of Khyber Pakhtunkhwa (D.I. Khan, Tank, Laki Marwat, Bannu, Karak, Kohat and Hangu).
                                            </li>
                                            <li>
                                                Delivered lectures at the Khyber Pakhtunkhwa Judicial Academy.
                                            </li>
                                        </ol>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Books Published</th>
                                    <td>
                                        <ul>
                                            <li>
                                                Signposts on the Road to Civil Trials (Two editions).
                                            </li>
                                            <li>
                                                The Art of Drawing Decree Sheet.
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Books to be published</th>
                                    <td>
                                        <ul>
                                            <li>
                                                Dying Declaration
                                            </li>
                                            <li>
                                                 Judicial Reforms in the Merged Districts Khyber Pakhtunkhwa.
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

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