@extends('teacher.layout.layout')
@section('title','Manage Subject')
@section('script')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/8gfwo746kb40xjmo85h8ds0d91mb3c1f6ps62vtas8skk2fk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>

    tinymce.init({
        selector:'#textdescription',

    });
</script>
@endsection

@section('content')
    @include('teacher.layout.header')



    <!-- Page Content -->



    <div id="page-content-wrapper">
        Welcome : {{ Auth::user()->name }}



        <button type="button" id="addhomework" class="button btn btn-outline-info" data-toggle="modal" data-target="#insert-homework" >
            Add new homework
        </button>
        <button type="button" class="btn btn-info" onclick="" id="editposts"> Toggle edit posts</button>
        <div class="modal fade" id="insert-homework" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new subject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <form method="post" action="{{route('inserthw',$users->id)}}" id="inserthomework">
                        {{csrf_field()}}
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="form-group">
                            <label for="subjectid">Subject Code:</label>
                                <input type="text" class="form-control" id="subjectid" name="subjectid" readonly value="{{$users->subjectCode}}">
                            </div>
                            <div class="form-group">
                                <label for="type">Type of the homework</label>
                                <input type="text" class="form-control" id="type" placeholder="Type of the homework" name="type">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" id="textdescription" class="form-control" id="description" name="description">
                            </div>
                            <div class="form-group">
                                <label for="type">Accept Submission ? </label>
                                <select id="submission" name="submission">
                                    <option value="true">True</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="duedate">Due Date</label><br>
                                <label for="date">Date</label>
                                <input type="date" id="date" name="dateline" class="form-control" placeholder="Date">
                                <label for="time">Time</label>
                                <input type="time" id="time" name="time" class="form-control" placeholder="Time">

                            </div>
                            <input type="submit" value="Add" class="btn btn-info">
                        </div>

                    </form>

                    <a>test</a>
                </div>
            </div>
        </div>
        @include('teacher.subject.2020calendar')

        </div>
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
    @include('teacher.layout.footer')
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>


    <script>

        //basic jquery,


        //document ready event is to prevent any jquery code from running before the document is finished loading or ready
        //is like we want this code to execute after all the page have been load up.
        //1.Define like $(. for class element, # for id element name)
        //2.jquery action on what to do to that defining element of selector
        //3. jquery event to be fire up
        //shortcut to $(document).ready(function(){
        $(function () {
            $(".bigdiv").click(function (){
                $("#addhomework").hide();
               //$(this).hide();
                alert("you have been click this button");
            });
            $("#addhomework").hover(function () {
                $(this).css("background-color", "yellow");
            }, function(){
                $(this).css("background-color", "pink");

            })

        });
        $(document).ready(function () {
           // $('bigdiv')

        })



    </script>

@endsection


// testing one two three
