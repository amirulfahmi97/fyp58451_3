@extends('parents.layout.layout')

@section('title','Homepage')
@section('script')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('js/app.js')}}">
@endsection
@section('content')
@include('parents.layout.header')



This is parents Homepage
@include('parents.layout.footer')
@endsection
