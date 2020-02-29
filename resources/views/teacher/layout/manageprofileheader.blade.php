<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">

    <div class="top-heading"><img src="{{ asset('./storage/images/'.$userfile->user_dp) }}" alt="" title=""></div>


        <div class="list-group list-group-flush">
            <a href="{{route('teacherdashboard')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="{{route('teacherprofile',Auth::user()->login_userid)}}" class="list-group-item list-group-item-action bg-light">Manage Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Add Homework</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Key in Mark</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Check Message</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Create Notification </a>




            <h4> Welcome :  {{ Auth::user()->name }} <span class="caret"></span></h4>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form> </div>
    </div>

    <!-- /#sidebar-wrapper -->
