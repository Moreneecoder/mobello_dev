<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mo' Bello || Software guy. Digital Creative</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


    <style>
        nav{
          position: fixed;          
        }

        .container{
            font-family: 'Montserrat', sans-serif;            
        }
    </style>
</head>
<body>
    <!--Navbar-->
<nav class="navbar fixed-top navbar-expand-lg white navbar-dark">

    <!-- Navbar brand -->
    <strong><a class="black-text" class="navbar-brand" href="/"><h4>Mo' Bello</h4></a></strong>
  
    <!-- Collapse button -->
    <button class="navbar-toggler cyan" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul class="navbar-nav mr-auto" style="margin:0 auto">
        <li class="nav-item active">
          <strong><a class="nav-link cyan-text" href="/bio">BIO
            <span class="sr-only">(current)</span>
          </a>
        </strong>
        </li>
        <li class="nav-item">
            <strong>
                <a class="nav-link cyan-text" href="/craft">CRAFT</a>
            </strong>
        </li>
        <li class="nav-item">
            <strong>
                <a class="nav-link cyan-text" target="_blank" href="https://mobello.hashnode.dev">THOUGHTS</a>
            </strong>
        </li>

        <li class="nav-item">
          <strong>
              <!-- <a class="nav-link cyan-text" href="/testimonials">TESTIMONIALS</a> -->
          </strong>
      </li>
  
        <!-- Dropdown -->
        <li class="nav-item ">
          <a href="/contact" class="nav-link cyan-text"><strong>REACH</strong></a>          
        </li>
  
      </ul>
      <!-- Links -->
  
      <div>
        <a href="https://twitter.com/mo_bello19"><i class="fab fa-twitter-square cyan-text" style="font-size: 1.5em"></i></a> &nbsp;
        <a href="https://www.linkedin.com/in/morenikeji-bello-106103143/"><i class="fab fa-linkedin blue-text" style="font-size: 1.5em"></i></a> &nbsp;                    
        <a href="https://github.com/moreneecoder"><i class="fab fa-github-square black-text" style="font-size: 1.5em"></i></a>
      </div>
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->

  <div class="container" style="padding-top: 70px; padding-bottom:30px">


    @yield('content')


  </div>


  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>