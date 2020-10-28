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
                    <h6>E-Filing: To Register your claim through website</h6>
                </div>
                <div class="card-body">

                </div>
                <div class="row">
                    <div class="col-sm-11 ml-3">
                        <blockquote class="blockquote">
                            <p class="mb-0">What is E-Filing?</p>
                            <footer class="blockquote-footer">
                                To File your Plaints/ Complaints online, initial filings are now accepted online via
                                this web site. A simple form will guide you through the process of completing your
                                claim. You MUST need a valid e-mail address to process with e-filing.
                            </footer>
                        </blockquote>

                        <blockquote class="blockquote">
                            <p class="mb-0">Filing from this web site is a multi-step process:</p>
                            <footer class="blockquote-footer">
                                First of all a complainant/plaintiff will need to register him/her-self for secure process and future communications with court Registration Branch.
                            </footer>
                            <br>
                            <footer class="blockquote-footer">
                                After the first step, you have to login to your account and complete the claim submission form and submit alongwith annexures the same electronically, the Court will send a Notice of Receipt of Documents to the e-mail address you provided once you finished submission process of the form. This notice will contain your e-Filing ID number and confirm that the Court has received your document(s). This notice doesn't mean that your Complaint/Plaints has been processed or accepted by the Court.
                            </footer>
                            <br>

                            <footer class="blockquote-footer">
                                The Court will review your Complaint/Plaint. Deficiencies If any shall be communicated on the email provided. if the same is registered, the Court will e-mail you a Notice of the date fixed & the transcript of the order fixing the date. The claim will be rejected if the deficiency is not met by the given date. If your Complaint/Plaint is rejected, the Court will e-mail you a Notice of Rejection of Filing stating the reasons why your Complaint/Plaint was rejected.
                            </footer>
                            <br>
                            <footer class="blockquote-footer">
                                After you will receive the acceptance email from the court, you will indicate whether you intend to appear in court or continue to address the court electronically in which case not only a date but a time slot will be provided to you by the court for your electronic appearance. Failure to appear electronically on the appointed time will result in an immediate adverse order of the defaulting party.
                            </footer>
                        </blockquote>
                        <p class="text-center">
                            <a class="btn btn-primary text-white" href="<?= route('e-file-signup') ?>">
                                Coutinue to Process
                            </a>
                        </p>
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