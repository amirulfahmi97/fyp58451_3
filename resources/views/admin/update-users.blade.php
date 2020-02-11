@extends('admin.layout.layout')
@section('title','Dashboard')
@section('content')
@include('admin.layout.header')
<h1>UPDATING PAGE</h1>

<div class="container mt-3">
  <form action="{{ route('admin.update', $userfile->id) }}" method="post">
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
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>
@include('admin.layout.globalfooter')
@endsection
