<html>
    <head>
<!--meta text-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstrap-->
	<link href="asset/lib/bootstrap.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style-index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <title>puspetindo</title>
    
    </head>
    <body>

 <div class="container">
  <center>
    <h1>Membuat Carousel dengan Bootstrap | www.malasngoding.com</h1></center>
  <br/>
  <div class="col-md-8 col-md-offset-2">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- deklarasi carousel -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://www.malasngoding.com/wp-content/uploads/2016/01/malasngoding1.png" alt="www.malasngoding.com">
          <div class="carousel-caption">
            <h3>www.malasngoding.com</h3>
            <p>Tutorial belajar pemrograman web, mobile dan design.</p>
          </div>
        </div>

        <div class="item">
          <img src="http://www.malasngoding.com/wp-content/uploads/2016/01/malasngoding2.png" alt="www.malasngoding.com">
          <div class="carousel-caption">
            <h3>Tutorial Bootstrap</h3>
            <p>Belajar tutorial bootstrap dasar di www.malasngoding.com</p>
          </div>
        </div>

        <div class="item">
          <img src="http://www.malasngoding.com/wp-content/uploads/2016/01/malasngoding3.png" alt="www.malasngoding.com">
          <div class="carousel-caption">
            <h3>Tutorial Android</h3>
            <p>Tutorial membuat aplikasi android.</p>
          </div>
        </div>
      </div>

      <!-- membuat panah next dan previous -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/js/jquery-3.3.1.min.js"></script>
    <script src="asset/js/script.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
  </body> 