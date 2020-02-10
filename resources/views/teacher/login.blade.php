@extends('admin.layout.layout')
@section('title','Login')
@section('head')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('css/app.css')}}" ></script>
@endsection


@section('content')

    @if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
    @endif

    <div class="body-first">
        <h1>Homework Monitoring System</h1>
        <h3>by</h3>
        <h2>Sekolah Kebangsaan Bangsar</h2>
        <h4>Teacher</h4>
d
        <div class=" body-first-form">
            <form action="{{ route('teacherloginsubmit') }}" method="post" id="logForm">
                {{ csrf_field() }}
                <label for="username">Username</label>
                <input type="text" id="username" name="username">

                @if ($errors->has('username'))
                    <span class="error bg-warning">{{ $errors->first('username') }}</span>
                @endif
                <br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">

                @if ($errors->has('password'))
                    <span class="error bg-warning">{{ $errors->first('password') }}</span>
                @endif
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>

    </div>

@endsection
