<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSRF Token-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--Title-->
        <title>Clinica Latin Lab</title>
        <!--Tab icon-->
        <link rel="icon" type="image/png" href="#" />
        <!---Styles-->
        @include('layouts.style')
    </head>
    <body class="nav-md">
      <div class="container body">
        <div class="main_container">
          @section('header')
            @include('sections.navigation')
            @include('sections.header')
          @show
          <div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left" >
                <h1 class="h3">@yield('title')</h1>
              </div>
            </div>
            @yield('content')
          </div>
        </div>
        <footer>
            @include('sections.footer')
        </footer>
      </div>
        @include('layouts.script')
    </body>
</html>
