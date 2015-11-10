<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title',"L5 Forum") </title>
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato' 'Helvetica';
            }
        </style>
    </head>
    <body>
        <div class="container">
           <h1><a href="{{ url() }}">L5 Forum</a></h1>
           <ul class="nav nav-tabs">
               <li><a href="{{ url('ask') }}"> Ask ?</a></li>
                @if (Auth::check()) 
                <li><a href="{{ url('logout') }}">Log out</a></li>
                @else
                <li><a href="{{ url('login') }}">Log in</a></li>
                <li><a href="{{ url('register') }}">Register</a></li>
                @endif
           </ul>
           
           <div class="row">
               <div class="col-md-2">
                   @yield('side-content')
               </div>

               <div class="col-md-8">
                   @yield('main')
               </div>

           </div>
        </div>
    </body>
</html>
