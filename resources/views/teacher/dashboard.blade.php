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
Welcome : {{ Auth::user()->name }}






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
