@extends('layouts.frontend')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .fa {
        transform: scale(1.5, 1.5);
    }
</style>
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
                            <h2>South Waziristan Related Links</h2>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <a href="https://lhc.gov.pk/">
                                        Lahore High Court
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.supremecourt.gov.pk/">
                                        Supreme Court of Pakistan
                                    </a>

                                </li>
                                <li>
                                    <a href="http://pja.gov.pk/">
                                        Punjab Judicial Acadamy
                                    </a>
                                </li>
                                <li>
                                    <a href="http://sindhhighcourt.gov.pk/">
                                        High court of Sindh
                                    </a>
                                </li>
                                <li>
                                    <a href="https://peshawarhighcourt.gov.pk/app/site/">
                                        Peshawar High Court
                                    </a>
                                </li>
                                <li>
                                    <a href="http://bhc.gov.pk/">
                                        High Court of Balochistan
                                    </a>
                                </li>
                            </ul>
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

@endsection