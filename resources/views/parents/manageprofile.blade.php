@extends('teacher.layout.layout')
@section('title','Manage Profile')
@section('script')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">

@endsection
@section('content')
   @include('parents.layout.header')
   <!-- Page Content -->
   <div id="page-content-wrapper">
       <!-- pput content between here-->



       <div class="container mt-3 bg-info">



   <h2>Manage your profile here</h2>
           <button class="btn btn-outline-secondary" onclick="#"> Update Profile</button>

           <div class="col-xl-8 shadow mt5">
            <!-- FLOATING RIGHT-->

            <!-- /FLOATING RIGHT-->


            <!--FLOATING LEFT -->
            <br>
             <form action="#" method="post">
       {{csrf_field()}}
       @method('PATCH')
      <div class="form-group">
       <label for="fname">Father name:</label>
       <input type="fname" class="form-control" placeholder="Enter Father name " id="fname">
       </div>

       <div class="form-group">
           <label for="pwd">Password:</label>
           <input type="password" class="form-control" placeholder="Enter password" id="pwd">
       </div>
       <div class="form-group form-check">
           <label class="form-check-label">
               <input class="form-check-input" type="checkbox"> Remember me
           </label>
       </div>
       <button type="submit" class="btn btn-primary">Submit</button>

   </form>

            <!-- /FLOATING LEFT -->
       </div>
       </div>
       <!-- until here -->

   </div>
   </div>
   <!-- /#page-content-wrapper -->




   @if (\Session::has('message'))
       <div class="alert alert-success">
           <ul>
               <li>{!! \Session::get('message') !!}</li>
           </ul>
       </div>
   @endif
@section('footer')
    @include('global.globallayout.footer')
@endsection

@endsection
