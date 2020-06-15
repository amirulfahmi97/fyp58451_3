
<!DOCTYPE html>

<html lang="en"  ng-app="FYP58451" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Manage Profile</title>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>

    <link rel="stylesheet" href="http://fyp58451.test/css/app.css">
    <link rel="stylesheet" href="http://fyp58451.test/js/app.js">


    </head>
    <body>
          <div class="d-flex" id="wrapper">
   <!--HEADER -->
    <div class="bg-light border-right bg-dark mr-2 pr-2 pt-5" id="sidebar-wrapper">
        <!--<div class="sidebar-heading">Start Bootstrap </div>
            -->
        <div class=" bg-dark list-group list-group-flush ">
            <a href="http://fyp58451.test/parent/dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="http://fyp58451.test/parent/profile/35" class="list-group-item list-group-item-action bg-light">Manage Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">View Homework</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">View Grade</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Chat with Teacher</a>




            <h4> Welcome :  fahmi <span class="caret"></span></h4>
            <a href="http://fyp58451.test/logout"
               onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="http://fyp58451.test/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="Fh5baldsfScq6JGBmuAfyOBa9B9GhzKHaucKo2gp">
            </form>
        </div>
    </div>
    <!--HEADER -->

    <!-- /#sidebar-wrapper -->
   <!-- Page Content -->
   <div id="page-content-wrapper">
       <!-- pput content between here-->


       </div>
       </div>
       <!-- until here -->

   <!-- /#page-content-wrapper -->




   

             <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
<div class="container text-center" >

<span class="text-muted">Sekolah Kebangsaan Bangsar</span>
</div>
</footer>


    </body>

</html>
