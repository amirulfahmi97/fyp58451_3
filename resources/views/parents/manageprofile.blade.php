@extends('teacher.layout.layout')
@section('title','Manage Profile')
@section('script')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">

@endsection
@section('content')
         <div class="d-flex " id="wrapper">
         @include('parents.layout.header')

        <!-- Page Content -->
        <div class="mt-lg-4 ml-lg-4 " id="page-content-wrapper">
        <!-- pput content between here-->
            <h2> Manage profile</h2>
            <div class=" row ml-lg-3">
                <form>
                    <div class="form-group">
                        <label for="fname">Guardian Name</label>
                        <input type="text" class=" new-form-control-sm" name="fname" id="fname" placeholder="">
                    </div>
                    <div class="form-group ">
                        <label for="age">Age</label>
                        <input type="text" class="form-control form-control-sm " style="width: 50px" name="age" id="age" placeholder="">
                    </div>
                    <div class="form-group">
                        <label> Identification Number</label>
                        <input type="text" class="form-control form-control-sm" name="icnumber" id="icnumber" >
                    </div>
                    <div class="form-group">
                        <label> Address</label>

                    </div>

                </form>
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
