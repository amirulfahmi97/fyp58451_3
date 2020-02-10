<!-- As a heading -->


<div class="navbar bg-dark p-2 mb-4 pb-3">
   <div class="float-left">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">

        <div class="collapse navbar-collapse bg-light" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="{{ url('admin') }}"><h4>Home</h4> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/create')}}"><h4>Add User</h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/controluser')}}"><h4>View Users</h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
  </div>

  <div class="float-right">
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
  <button type="button" name="LOGOUT">LOGOUT</button>
  </div>


</div>
