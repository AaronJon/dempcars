<?php
include("../models/db.php");
include("../models/cars.php");

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEMP Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../res/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../res/css/fontawesome-all.min.css">
    <link rel="icon" href="../res/images/log.png" type="image/x-icon">    
  <style>
      .social{
        height: 50px;
        width: 50px;
      }
      .slider{
         max-height: 90vh; 
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
        
    </style>
    <script src="../res/js/jquery.min.js"></script>
    <script src="../res/js/popper.min.js"></script>
    <script src="../res/js/bootstrap.min.js"></script>
    <script src="../res/js/shards.min.js"></script>

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
       <a class="navbar-brand text-white h1 font-weight-bolder" href="../index.php" style="font-size: 24px; font-weight: bolder;"><img src="../res/images/log.png"style="height: 40px; width: 40px;"><span class="text-success">DEMP</span> Cars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav nav-tabs ml-auto text-center" id="navtabs">
             
            <li class="nav-item">
              <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 pl-2 h5 font-weight-bold text-white" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 h5 font-weight-bold text-white" href="../index.php">About Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link bg-white active rounded-0 border-top-0 border-bottom-5 border-bottom-success border-right-0 border-left-0 h5 font-weight-bold text-success" href="#">All Cars</a>
              </li>
                 <li class="nav-item">
                  <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 pl-2 h5 font-weight-bold text-white bg-success" href="sell.php">Sell Car</a>
              </li>
          </ul>
     </div>
      </nav>
    
    <div class="container">
          <p class="text-dark h1 mt-5"><span class="text-success">Available</span> Cars</p>
          <div class="row justify-content-center">
            <?php
            $_c = new Car();
            $cars = $_c->getAll($con);

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
                  <div class='card-body' style='overflow:hidden;'>
                      <div class='card' style='width: 18rem;' >
                          <div class='card-body' style='overflow:hidden;  flex-direction:column; justify-content: center;  align-items: center'>
                            <img src='../cars/$id/image1'/ style='width:100%; height:auto;'>
                          </div>
                        </div>
                        <p class='card-text'>$brand.<br>GHc $price<br>$carcondition<br> $location</p>
                      <a href='./pro.php?id=$id' class='card-link text-dark'><button type='button' class='btn btn-outline-success'>Read more</button></a>
                  </div>
                </div>
              </div>";
            }
            ?>
        </div>
    </div>
   
    
    
     <div class="container-fluid bg-success">
        
            <div class="row footer-navs justify-content-center text-center text-md-center pb-0">
                <div class=" col-sm-4 col-lg-2">
                   <h4 class="h4 footer-nav-title font-weight-bold mt-5">ABOUT</h4>
                    <a href="#about" class="d-block text-white">About Us</a>
                    <a href="#contact-us" class="d-block text-white">Contact Us</a>
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