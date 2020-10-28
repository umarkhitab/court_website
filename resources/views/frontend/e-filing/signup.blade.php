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
                    <h6>Please Complete Registration as your first step to E-Filing</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-11 ml-3">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-contrast alert-success alert-dismissible" role="alert">
                                <div class="icon"><span class="mdi mdi-check"></span></div>
                                <div class="message">
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                                            class="mdi mdi-close" aria-hidden="true"></span></button><strong>
                                        {{ $message }} </strong>
                                </div>
                            </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-sm-6">
                                    <form method="post" action="{{ route('sign-user') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Valid Email
                                                [Recommended Email: @gmail.com]</label>
                                            <input type="email" class="form-control" name="email" required
                                                value="{{ old('email') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Choose Password</label>
                                            <input type="password" class="form-control" name="password" required
                                                value="{{ old('password') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Confirm Password </label>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                value="{{ old('password_confirmation') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Valid Cell Phone # [Optional] </label>
                                            <input type="text" class="form-control" name="phone"
                                                value="{{ old('phone') }}" required>
                                        </div>
                                        <p class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
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