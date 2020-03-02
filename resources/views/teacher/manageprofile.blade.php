@extends('teacher.layout.layout')
@section('title','Homepage')
@section('script')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">

@endsection

@section('content')
    @include('teacher.layout.manageprofileheader')


    <!-- Page Content -->
    <div id="page-content-wrapper">


        <div class="container mt-3">

            <button class="btn btn-outline-secondary" onclick="enableinput()"> Update Profile</button>
            <button class="btn btn-outline-secondary"> Update Profile Photo</button>


            <div class="col-xl-8 shadow mt-5 ">

                <div class="float-right">
                    <div class="form-group">

                        <label for="username"> Username</label>
                        <div class="">
                            <input type="text" id="username" class="form-control" value="{{Auth::user()->username}} "readonly>

                        </div>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                            Update Username
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal Header</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">


                                        <label for="username"> Current Username</label>
                                        <div class="">
                                            <input type="text" id="username" class="form-control" value="{{Auth::user()->username}} "readonly>

                                        </div>


                                        <label>New Username</label>
                                        <div class="form-group" {{ $errors->has('username') ? 'has-error' : ''}}>
                                            <form action="{{route('updateprofile',$userfile->user_id)}}" method="post" >
                                                {{csrf_field() }}
                                                @method('PATCH')
                                                <input type="text" name="username" id="newusername" class="form-control">
                                        </div>  {!! $errors->first('username', '<small class="text-danger">:message</small>') !!}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" name="updateusername" class="btn btn-success">Update Username</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="float-left">
                    <form action="{{ route('updateprofile', $userfile->user_id)  }}"  method="post">
                        {{csrf_field() }}
                        @method('PATCH')

                        <div class="card bg-dark col-12" >
                            <div class="card-header ">
                                <h5 class="card-title text-info">Manage Profile</h5>
                            </div>
                            <div class="card-body ">

                                {{--  print success message  --}}
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif

                                <div class="row-cols-md-1 " id="item-right">

                                    <div class="form-group" {{ $errors->has('name') ? 'has-error' : ''}}>
                                        <label> Full Name </label>
                                        <div class="" style="width:300px">
                                            <input type="text" id="name" name="name" placeholder="First Name" class="form-control " value="{{ $userfile->user_fullname }}">
                                        </div>  {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}

                                    </div>

                                    <div class="form-group" {{ $errors->has('user_mail') ? 'has-error' : ''}}>
                                        <label> Email </label>

                                        <input type="text" id="email" name="user_email" placeholder="Email" class=" form-control " value="{{ $userfile->user_email }}">
                                        {!! $errors->first('user_email', '<small class="text-danger">:message</small>') !!}
                                    </div>


                                    <div class="form-group" {{ $errors->has('address') ? 'has-error' : ''}}>
                                        <label> Address </label>
                                        <input class="form-control" id="address" placeholder="Address" type="text" name="address" value="{{ $userfile->user_address }}">
                                        {!! $errors->first('address', '<small class="text-danger">:message </small>') !!}
                                    </div>

                                    <div class="form-group" {{ $errors->has('user_phone') ? 'has-error' : ''}}>
                                        <label> Phone </label>
                                        <input type="text" name="phonenumber" id="phone" placeholder="Phone Number" class="form-control "  style="width: 150px" value="{{ $userfile->user_phone }}">
                                        {!! $errors->first('user_age', '<small class="text-danger">:message </small>') !!}
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="button" class="btn btn-success" name="manageprofile"> Submit </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="row-cols-md-1 bg-info col-12">
                        <div class="form-group" ><label> List of subject teach </label>
                           @foreach($listsubject as $listsubject )



                            <ul class="list-group">
                                <li class="list-group-item"> {{$listsubject->subjectName}}</li>
                            </ul>
                               @endforeach
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#subject-modal">
                                Add new subject
                            </button>



                            <div class="modal fade" id="subject-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add new subject</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form method="post" action="{{ route('updateprofile', $userfile->user_id)  }}" id="subject-form">
                                            {{csrf_field() }}
                                            @method('PATCH')
                                            <div class="modal-body">
                                                <div class="form-group">

                                                    <input type="hidden" name='teacherID' class="form-control-sm" readonly name="user_id" id="user_id" value="{{Auth::user()->login_userid}}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="subjectCode">Subject Code:</label>
                                                    <input type="text" class="form-control" id="subjectCode" placeholder="Year of the subject" name="subjectCode">
                                                </div>

                                                <div class="form-group">

                                                    <label for="subjectname">Subject Name:</label>
                                                    <input type="text" class="form-control" id="subjectname" placeholder="name of the Subject" name="subjectName">
                                                </div>
                                                <div class="form-group">
                                                    <label for="subjectyear">Subject Year:</label>
                                                    <input type="number" class="form-control" id="subjectyear" placeholder="Year of the subject" name="subjectYear">
                                                </div>

                                                <div class="modal-footer">

                                                    <input type="submit" name="insertsubject" id="insertSubject" value="insertsubject" class="btn btn-info" />
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--subject model end-->
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>

    </div>
    </div>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    <script>

        document.getElementById("name").disabled = true;
        document.getElementById("email").disabled = true;
        document.getElementById("phone").disabled = true;
        document.getElementById("email").disabled = true;
        document.getElementById("button").disabled = true;

        function enableinput(){
            // document.getElementById('name').disabled = false;
            document.getElementById("name").disabled = false;
            document.getElementById("email").disabled = false;
            document.getElementById("phone").disabled = false;
            document.getElementById("email").disabled = false;
            document.getElementById("button").disabled = false;

        }
        //test//

        //
        //        $(document).ready(function () {
        //            $('#subject-form').on('insertSubject',function () {
        //                var userID = $('#user_id').val();
        //                var subjectname = $('#subjectname').val();
        //                var subjectyear = $('#subjectyear').val();
        //                if(subjectname!=="" && subjectyear !==""){
        //                    $.ajax({
        //                        url:"{{route('insertsubject')}}",
        //                        method:"PATCH",
        //
        //                        data:{
        //                            _token:$("#csrf").val(),
        //                            type:1,
        //                            teacherID:userID,
        //                            subjectName:subjectname,
        //                            subjectYear:subjectyear
        //
        //                        },
        //                        cache:false,
        //                        success:function (dataResult) {
        //                        console.log(dataResult);
        //                        var dataResult = JSON.parse(dataResult);
        //                        if(dataResult.statusCode === 200){
        //                            window.location = "/insertsubject"
        //                        }
        //                        else if(dataResult.statusCOde ===201)
        //                            {
        //                            alert("error occured !");
        //
        //                        }
        //                        }
        //
        //                    })
        //                }
        //                else{
        //                    alert('FILL IN!');
        //                }
        //
        //            });
        //
        //        });
    </script>

    @if (\Session::has('message'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('message') !!}</li>
            </ul>
        </div>
    @endif
@section('footer')

    @include('teacher.layout.footer')
@endsection



@endsection
