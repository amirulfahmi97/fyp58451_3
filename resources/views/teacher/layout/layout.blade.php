<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  ng-app="FYP58451" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        @yield('script')

    </head>
    <body>
      @yield('content')

     @yield('jscript')
    @yield('footer')



    </body>

</html>
