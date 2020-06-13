@extends('teacher.layout.layout')
@section('title','Manage Profile')
@section('script')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">

@endsection
@section('content')
    @include('parents.layout.header')


    <div id="page-content-wrapper">
        Welcome : {{ Auth::user()->name }}





    </div>
    </div>
    <!-- /#page-content-wrapper -->





@section('footer')
    @include('global.globallayout.footer')
@endsection

@endsection
