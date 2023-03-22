<?php
include("models/db.php");
include("models/cars.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEMP Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="res/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="res/css/fontawesome-all.min.css">
    <link rel="icon" href="res/images/log.png" type="image/x-icon">

        
  <style>
      .social{
        height: 50px;
        width: 50px;
      }
      .slider{
         max-height: 85vh; 
        overflow: hidden;
        /* max */
      }
      
      #navtabs{
          border-bottom: 0px;
      }

      .navbar {
        margin: 0 auto;
        top: 0;
        width: 100%;
        z-index: 999;
          }
       
 
        .carousel-multi-item-2 .col-md-3 {
            float: left;
            width: 15%;
            max-width: 60%; 
            align-items: center;
            align-content: center;
      }

      .carousel-multi-item-2 .card img {
          border-radius: 2px; 
          align-items: center;
          align-content: center;
      }


    </style>
    <script src=" res/js/jquery.min.js"></script>
    <script src=" res/js/popper.min.js"></script>
    <script src=" res/js/bootstrap.min.js"></script>
    <script src=" res/js/shards.min.js"></script>
        <script src=" res/js/scrip.js"></script>
        
        <script>
            $(window).scroll(function() {   
		var height = $(window).scrollTop(); 
		if(height  > 100) {
			$(".navbar").css({"position": "fixed"});
		} else{
			$(".navbar").css({"position": "relative"});
		}
	});
        </script>
        
       
        
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <a class="navbar-brand text-white h1 font-weight-bolder" href="index.php" style="font-size: 24px; font-weight: bolder;"><img src="res/images/log.png"style="height: 40px; width: 40px;"><span class="text-success">DEMP</span> Cars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav nav-tabs ml-auto text-center" id="navtabs">
             <!--  <form method="GET" action="web/search.php" class="mx-5 form-inline justify-content-center">
                  <input class="form-control-md rounded-0 border-top-0 border-bottom-0 border-right-0 pl-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn-outline-white my-sm-0 rounded-0 border-top-0 border-bottom-0 border-left-0" type="submit">
                      <i class="fas fa-search"></i>
                  </button>
              </form> -->
            <li class="nav-item">
              <a class="nav-link bg-white active rounded-0 border-top-0 border-bottom-5 border-bottom-success border-right-0 border-left-0 h5 font-weight-bold text-success" href="#">Home</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 pl-2 h5 font-weight-bold text-white" href="web/gallery.php">All Cars</a>
              </li>
                 <li class="nav-item">
                  <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 pl-2 h5 font-weight-bold text-white bg-success" href="web/sell.php">Sell Car</a>
              </li>
          </ul>
     </div>
      </nav>
    
     <div id="carouselExampleInterval" class="carousel slide slider" data-ride="carousel">
        
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
              <img src=" res/images/dempcar1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
               
              </div>
            </div>
            <div class="carousel-item" data-interval="2000">
              <img src=" res/images/dempcar2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
               
                </div>
            </div>
          </div>
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    <div class="container">
          <p class="text-dark h1 mt-5 pt-5"><span class="text-success">Featured</span> Cars</p>
          <div class="row justify-content-center">
            <?php
            $_c = new Car();
            $cars = $_c->getN($con,6);

            for ($i=0; $i < count($cars); $i++) {
              $_c = $cars[$i];
              $id = $_c->id; 
              $price = $_c->price;
              $model = $_c->model;
              $carcondition = $_c->carcondition;
              $location = $_c->location;
              $brand = $_c->brand;
              echo "            
              <div class='col-12 col-sm-6  col-md-4'>
                <div class='card' style='width: auto;'>
                  <div class='card-body'  style='overflow:hidden;'>
                      <div class='card' style='width: 18rem;' >
                          <div class='card-body' style='overflow:hidden; display: flex; flex-direction:column; justify-content: center;  align-items: center'>
                            <img src='./cars/$id/image1' style=' width:100%; height:auto;'/>
                          </div>
                        </div>
                        <p class='card-text'>$brand.<br>GHc $price<br>$carcondition<br> $location</p>
                      <a href='web/pro.php?id=$id' class='card-link text-dark'><button type='button' class='btn btn-outline-success'>Read more</button></a>
                  </div>
                </div>
              </div>";
            }
            ?>
        </div>
        <br>
         <!--Carousel Wrapper-->
<div id="multi-item-example" class=" justify-content-center carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel" style="width:100%; margin-left: 20%;">

  <!--Controls-->
   <p class="text-dark h3 mt-5 pt-5"><span class="text-success">Some</span> <span class="text-dark">Brands</span></p>
  <!--/.Controls-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src=" res/images/logos/00000001574.png"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src=" res/images/logos/bmw-logo-A677AA8342-seeklogo.com.png"
            alt="Card image cap">
        </div>
      </div>
         <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src=" res/images/logos/Ford-logo-1929-1440x900.png"
            alt="Card image cap">
        </div>
      </div>
         <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src=" res/images/logos/Nissan_logo.jpg"
            alt="Card image cap">
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src=" res/images/logos/volwagen.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src=" res/images/logos/Rolls-Royce-Logo.png"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src=" res/images/logos/porsche.webp"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src=" res/images/logos/opel_w_1x.jpg"
            alt="Card image cap">
        </div>
      </div>

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
   

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
          </div>
    
   

    <br><br>
    <div id="about">
    <div class="jumbotron bg-success"  >
                 <h1 class="text-white">About Us</h1> 
                    <p class="text-white" style="font-size:16px;" >The system seeks to reduce the difficulties normal car dealers and ordinary people face when they try to put their cars up for sale.</p> <p class="text-white" style="font-size:16px;">We take your cars and put them up for sale for you. We reduce the process to just filling a simple form (Click the link below), and adding a couple of pictures ofyour vehicle. <br><span style="font-size:24px; text-transform: uppercase; font-weight: bold;">You are done!</span></p><p class="text-white" style="font-size:16px;">Just sit tight and wait for calls from potential buyers.</p>
        
        
                   <a href="web/sell.php"> <button type="button" class="btn btn-dark  btn-lg"> Sell a Car
                       </button></a>
        </div>  
    </div>
        
    <div id="contact">
        <div class="jumbotron bg-dark">
            <h1 class="text-white">Get in touch with us</h1> 
                    <a href="facebook.com" class="d-block text-white" target="_blank"><i class="fab fa-facebook-f text-success mx-2" ></i>Facebook</a>
                   <a href="twitter" class="d-block text-white" target="_blank"><i class="fab fa-twitter text-success mx-2"></i>Twitter</a> 
            <a href="twitter" class="d-block text-white" target="_blank"><i class="fa fa-phone text-success mx-2"></i>(+233) 546 925 224</a> 
            <a href="twitter" class="d-block text-white" target="_blank"><i class="fa fa-envelope text-success mx-2"></i>dempcars@gmail.com</a> 
                   
               
        </div>
    </div>
    
    <div class="container-fluid bg-success">
        
            <div class="row footer-navs justify-content-center text-center text-md-center pb-0">
                <div class=" col-sm-4 col-lg-2">
                   <h4 class="h4 footer-nav-title font-weight-bold mt-5">ABOUT</h4>
                    <a href="#about" class="d-block text-white">About Us</a>
                    <a href="#contact" class="d-block text-white">Contact Us</a>
                </div>
                
                
                
                <div class="col-md-4 col-lg-2">
                    
                    <h4 class="h4 footer-nav-title font-weight-bold mt-5">Social Media</h4>
                    
                    <a href="facebook.com" class="d-block text-white" target="_blank"><i class="fab fa-facebook-f text-dark mx-2" ></i>Facebook</a>
                   <a href="twitter" class="d-block text-white" target="_blank"><i class="fab fa-twitter text-dark mx-2"></i>Twitter</a>
                    
                </div>
               
            </div>
            
            <div class="row m-0 p-0">
                <div class="col-12 d-flex justify-content-center mt-3">
                    <p class="font-weight-bold m-0 p-0" style="font-size: 12px;">Copyright &copy;2019, DEMP Cars, All Rights Reserved</p>
                </div>
            </div>
          </div>
         
    
</body>
</html>