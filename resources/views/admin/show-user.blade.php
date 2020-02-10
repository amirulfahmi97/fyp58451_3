@extends('layout.app')
@section('content')
@extends('layout.adminheader')
asdasd
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/create') }}" class="btn btn-info float-right"><i class="fas fa-plus-circle"></i> Add New </a>
        </div>
    </div>
 
    <table class="table table-striped table-bordered mt-4">
        <thead>
          <th>Profile Photo</th>
            <th> Full Name </th>
            <th> Age </th>
            <th> Phone Number </th>
            <th> Address </th>
            <th> NRIC </th>
            <th> User Type </th>
            <th> Action </th>
        </thead>
 
        <tbody>
            @foreach($userfile as $userfile)
            <tr>
              <td>{{$userfile->user_dp}}</td>
                <td> {{ $userfile->user_fullname }} </td>
                <td> {{ $userfile->user_age }} </td>
                <td> {{ $userfile->user_phone }} </td>
                <td> {{ $userfile->address }} </td>
                <td> {{ $userfile->user_nric}} </td>
                <td> {{ $userfile->user_type}} </td>
                {{-- <td> <a href="{{ route('admin/edit', $userfile->id )}}" class="badge badge-info"> View </a>
                    <a href="{{ route('admin/edit', $userfile->id )}}" class="badge badge-success"> Edit </a>
                    <form action="{{ route('admin/edit', $userfile->id)}}" method="post"> 
                     @csrf
                     @method('DELETE')
                        <button class="badge btn-danger" type="submit"> Delete </button>
                   </form>--}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection