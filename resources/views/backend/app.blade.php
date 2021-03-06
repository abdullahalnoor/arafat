<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title> @yield('title_bar') | Learn </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/')}}/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">

    <!-- Navbar-->
    @include('backend.includes.header')
    <!-- End Navbar-->

      <!-- Sidebar-->
      @include('backend.includes.sidebar')
      <!-- End Sidebar-->


        <!-- Main-->
      <main class="app-content">

        <div class="app-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> 
            @yield('page_title')
            </h1>
            {{-- <p>Start a beautiful journey here</p> --}}
          </div>
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
          </ul>
        </div>

        @yield('content')
      </main>
      

    <!-- End Main-->
   
   
   
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('backend/')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('backend/')}}/js/popper.min.js"></script>
    <script src="{{asset('backend/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('backend/')}}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('backend/')}}/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>