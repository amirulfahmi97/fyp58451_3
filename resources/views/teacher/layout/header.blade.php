<div class="d-flex" id="wrapper">
  <div class="bg-light border-right bg-dark mr-2 pr-2 pt-5" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class=" bg-dark list-group list-group-flush ">
        <a href="#" class="list-group-item list-group-item-action bg-light">Manage Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Add Homework</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Key in Mark</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Check Message</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Create Notification</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>


    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <h4> Welcome :  {{ Auth::user()->name }} <span class="caret"></span></h4>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>
</div>
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">

        <div class="float-right">

        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
             <li class="nav-item">
              <h4>Welcome:</h4>
             </li>
          </ul>

          <ul class="navbar-nav ">
              <li class="navbar-item">
                <h4>test</h4>
              </li>
          </ul>
        </div>
        <button class="btn bg-light">LOGOUT</button>
      </nav>
