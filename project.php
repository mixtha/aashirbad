<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">

  <style>
  	.carousel-item{
      margin-top: 70px;
      height: 350px;
     
    }

    .pad{
      padding-top: 10px;
      
    }

    

  </style>
</head>


  <?php include "header.php";?>

  <body>
    <div id="projectcarousel" class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
          <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleControls" data-slide-to="1"></li>
          <li data-target="#carouselExampleControls" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img\img1.jpg" class="d-block w-100 h-100" alt="img1">
        </div>
        <div class="carousel-item">
          <img src="img\img2.jpg" class="d-block w-100 h-100" alt="img2">
        </div>
        <div class="carousel-item">
          <img src="img\img3.jpg" class="d-block w-100 h-100" alt="img3">
        </div>
      </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
    </div>
    </div>


    <section style="margin-top: 50px;">
      <div class="container">
        <div class="row">
          <div class="pad col-sm-6">
              <div class="card">
                <img src="img\img1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                 <p class="card-text">hzkjhksahdiydsadjkldsaaskdjsajdsajldjsadjsajlksajdlksajdkljsadkjsadjsalkjdsalkjdlksajd</p>
                </div>
              </div>
          </div>
          <div class="pad col-sm-6">
              <div class="card">
                <img src="img\img1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                 <p class="card-text">hzkjhksahdiydsadjkldsaaskdjsajdsajldjsadjsajlksajdlksajdkljsadkjsadjsalkjdsalkjdlksajd</p>
                </div>
              </div>
          </div>
          <div class="pad col-sm-6">
              <div class="card">
                <img src="img\img1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                 <p class="card-text">hzkjhksahdiydsadjkldsaaskdjsajdsajldjsadjsajlksajdlksajdkljsadkjsadjsalkjdsalkjdlksajd</p>
                </div>
              </div>
          </div>

            
            
         </div>
      </div>
    </section>
  </body>
	

<?php include "footer.php";?>