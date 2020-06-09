
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

<button type="button" class="button btn btn-outline-info" data-toggle="modal" data-target="#insert-homework" >
    Add new homework
</button>

<div class="modal fade" id="insert-homework" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <form method="post" action="">

            </form>
            <a>test</a>
        </div>
    </div>
</div>

@endsection


