<div class="d-flex" id="wrapper">
  <div class="bg-light border-right bg-dark mr-2 pr-2 pt-5" id="sidebar-wrapper">
  <!--<div class="sidebar-heading">Start Bootstrap </div>
      -->
      <div class=" bg-dark list-group list-group-flush ">
          <a href="{{route('parentdashboard')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
          <a href="{{route('parentprofile',Auth::user()->login_userid)}}" class="list-group-item list-group-item-action bg-light">Manage Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">View Homework</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">View Grade</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Chat with Teacher</a>




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
