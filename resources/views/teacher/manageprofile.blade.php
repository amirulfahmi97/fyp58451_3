@extends('teacher.layout.layout')
@section('title','Homepage')
@section('script')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
@endsection

@section('content')
    @include('teacher.layout.header')



    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container mt-3">
            <form action="{{ route('updateprofile', $userfile->id) }}" method="post">
                {{csrf_field() }}
                @method('PATCH')
                <div class="row">
                    <div class="col-xl-8 p-4 m-auto shadow">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-info"> Update Student </h5>
                            </div>
                            <div class="card-body">

                                {{--  print success message  --}}
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif

                                <div class="row">
                                    {{--  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">--}}
                                    <div class="form-group" {{ $errors->has('name') ? 'has-error' : ''}}>
                                        <label> Full Name </label>
                                        <input type="text" name="name" placeholder="First Name" class="form-control" value="{{ $userfile->user_fullname }}">
                                        {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}
                                    </div>

                                    <div class="form-group" {{ $errors->has('user_mail') ? 'has-error' : ''}}>
                                        <label> Email </label>
                                        <input type="text" name="user_email" placeholder="Email" class="form-control" value="{{ $userfile->user_email }}">
                                        {!! $errors->first('user_email', '<small class="text-danger">:message</small>') !!}
                                    </div>


                                    <div class="form-group" {{ $errors->has('address') ? 'has-error' : ''}}>
                                        <label> Address </label>
                                        <input class="form-control" placeholder="Address" type="text" name="address" value="{{ $userfile->address }}">
                                        {!! $errors->first('address', '<small class="text-danger">:message </small>') !!}
                                    </div>


                                    <div class="form-group" {{ $errors->has('age') ? 'has-error' : ''}}>
                                        <label> Age </label>
                                        <input type="text" name="age" placeholder="age" class="form-control" value="{{ $userfile->user_age }}">
                                        {!! $errors->first('age', '<small class="text-danger">:message </small>') !!}
                                    </div>


                                    <div class="form-group" {{ $errors->has('user_phone') ? 'has-error' : ''}}>
                                        <label> Phone </label>
                                        <input type="text" name="phonenumber" placeholder="Phone Number" class="form-control" value="{{ $userfile->user_phone }}">
                                        {!! $errors->first('user_age', '<small class="text-danger">:message </small>') !!}
                                    </div>

                                    <div class="form-group" {{ $errors->has('user_nric') ? 'has-error' : ''}}>
                                        <label> NRIC </label>
                                        <input type="text" name="nric" placeholder="NRIC" class="form-control" value="{{ $userfile->user_nric }}">
                                        {!! $errors->first('user_nric', '<small class="text-danger">:message </small>') !!}
                                    </div>

                                    <div class="form-group" {{ $errors->has('user_type') ? 'has-error' : ''}}>
                                        <label> User Type </label>
                                        <select class="form-control" name="usertype">
                                            <option value="Student">Student</option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Admin" >Admin</option>
                                        </select>
                                        {!! $errors->first('user_type', '<small class="text-danger">:message </small>') !!}
                                    </div>

                                    <div class="form-group" {{ $errors->has('user_dp') ? 'has-error' : ''}}>
                                        <label> Profile Photo </label>
                                        <img src="{{ asset('./storage/images/'.$userfile->user_dp) }}" alt="" title="">

                                        <input type="file" name="user_dp" class="form-control"  accept="image/png, image/jpeg">>

                                        <label for="user_dp">Upload a new profile photo</label>
                                        {!! $errors->first('user_dp', '<small class="text-danger">:message </small>') !!}
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" name="submit"> Submit </button>
                                    </div>

                                </div>
    <!-- /#page-content-wrapper -->

    </div>
    @if (\Session::has('message'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('message') !!}</li>
            </ul>
        </div>
    @endif

    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    @include('teacher.layout.footer')
@endsection
