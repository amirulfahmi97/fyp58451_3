@extends('admin.layout.layout')

@section('content')
@include('admin.layout.header')


@if ($errors->any())
    <div class="alert alert-danger col-md-3 col-9" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('error'))
<div class="alert alert-danger">
  {{session('error')}}
</div>
@endif
@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="container admin-add-user ">
  {!! Form::open(['action' => 'AdminController@store','method'=>'POST','id'=>'userform','files'=>'true','enctype'=>'multipart/form-data']) !!}
  <fieldset>
    <legend class="text-center"><h3>User Registration</h3></legend>
    <div class="left-float-container float-left mw-100 ">
      <div class="form-group row">
        {{Form::label('name','Name',['class'=>'control-label col-md-3'])}}
        <div class="col-md-9">
          {{Form::text('name','',['class'=>'form-control','placeholder'=>'Full Name','id'=>'name'])}}

        </div>
      </div>
      <div class="form-group row">
        {{Form::label('user_email','Email',['class'=>'control-label col-md-3'])}}
        <div class="col-md-9">
          {{Form::text('user_email','example@example.com',['class'=>'form-control'])}}

        </div>
      </div>

      <div class="form-group row">
        {{Form::label('user_age','Age',['class'=>'control-label col-md-3'])}}
        <div class="col-md-9">
          {{Form::text('user_age','',['class'=>'form-control','id'=>'user_age'])}}
        </div>
      </div>

      <div class="form-group row">
        {{Form::label('phonenumber','Phone Number',['class'=>'control-label col-md-3'])}}
        <div class="col-md-9">
          {{Form::text('phonenumber','',['class'=>'form-control','placeholder'=>'Phone Number'])}}
        </div>
      </div>

      <div class="form-group row">
        {{Form::label('address','Address',['class'=>'control-label col-md-3'])}}
        <div class="col-md-9">
          {{Form::text('address','',['class'=>'form-control','placeholder'=>'First Address'])}}
        </div>
      </div>

      <div class="form-group row">
        {{Form::label('address2','Address',['class'=>'control-label col-md-3'])}}
        <div class="col-md-9">
          {{Form::text('address2','',['class'=>'form-control','placeholder'=>'Second Address'])}}
        </div>
      </div>



        <div class="form-group row" {{ $errors->has('user_dp') ? 'has-error' : '' }}>

        {{Form::label('user_dp','Profile Photo',['class'=>'control-label col-md-3'])}}
        <div class="col-md-9">
          {{Form::file('user_dp',null)}}

          <p class="label">Passport size photo only</p>
        </div>
      </div>
    </div>


    <div class="right-float-container float-right mr-5">

      <div class="form-group row">
        {{Form::label('nric','NRIC',['class'=>'control-label col-md-3'])}}
        <div class="col-md-9">
          {{Form::text('nric','',['class'=>'form-control'])}}
        </div>
      </div>

      <div class="form-group row">
        {{Form::label('usertype','Select User Type',['class'=>'control-label col-md-3'])}}
        <div class="col-md-9">
          {{Form::select('usertype',array(
            'parents' => 'Parents',
            'teacher' => 'Teacher',
            'admin'=> 'Admin'),null,['class'=>'form-control'])}}
        </div>
      </div>
      <div class="form-group text-left">
        {{Form::button('Generate Password',['class'=>'btn btn-primary'])}}

      </div>
      <div class="form-group">
        {{Form::text('password',null,['class'=>'form-control','readonly'=>'true'])}}
      </div>

    </div>

  </div>
</fieldset>
<div class="text-center pb-5">
  {{Form::submit('Submit',['class'=>'btn btn-primary upload-image'])}}

</div>
{!! Form::close() !!}

@include('admin.layout.globalfooter')

@endsection
