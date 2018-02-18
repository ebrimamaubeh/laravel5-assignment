
<!DOCTYPE html>
<html lang="en">
  <head>

      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Welcome, {{Auth::user()->name}}</a></li>
            <li> 

            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Blogs <small> posts</small></h1>

            </div>
            <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default" type="button"  
              onclick="event.preventDefault();
                       document.getElementById('new-blog-form').submit();">
                Add Blog 
              </button>

              <form id="new-blog-form" method="get" action="{{ route('blogs.create') }}">
                
              </form>
             
            </div>
                
            </div>

        </div>


    </div>

    </header>

    <section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                            <div class="list-group">
              <a href="{{ route('blogs.index') }}" class="list-group-item >
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="{{route('blogs.index')}}" class="list-group-item  active main-color-bg"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Blogs </a>
            </div>
            </div>
            <div class="col-md-9">
              <!-- Website Overview -->
               @yield('content')


            </div>
        

    </section>
    
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
