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
           <h1>L5 Forum</h1>
           <div class="row">
               <div class="col-md-3">
                   @yield('side-content')
               </div>

               <div class="col-md-9">
                   @yield('main')
               </div>

           </div>
        </div>
    </body>
</html>
