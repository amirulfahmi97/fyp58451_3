
@extends('admin.layout.layout')
@section('title','Dashboard')




@section('content')
@include('admin.layout.header')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<p> THis is admin dashboard</p>


adsd


<p>adasd</p><p>adxxxasd</p>

@endsection


