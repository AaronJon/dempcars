<?php
include("../models/db.php");
include("../models/cars.php");
$id = 0;
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}else{
  header("Location: ../index.php");
}
$_c = new Car();
$_c = $_c->get($con,$id);



?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DEMP Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../res/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" media="screen" href="../res/css/style1.css">
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
        
    </style>
    <script src="../res/js/jquery.min.js"></script>
    <script src="../res/js/popper.min.js"></script>
    <script src="../res/js/bootstrap.min.js"></script>
    <script src="../res/js/shards.min.js"></script>

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
                  <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 h5 font-weight-bold text-white" href="gallery.php">All cars</a>
              </li>
                 <li class="nav-item">
                  <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 pl-2 h5 font-weight-bold text-white bg-success" href="sell.php">Sell Car</a>
              </li>
          </ul>
     </div>
      </nav>
    

<div class="container mx-auto pt-3">
	<div class="row">
		<div class="col-md-8">
		   <div class="individual-car-title">
    		    <h3><?php echo $_c->brand ?>, <?php echo $_c->carcondition ?> Model</h3>
             
                <div class="cars-tabs">
		        <div class="card">
		            <div class="card-body">
		                <div class="row">
		                  <div class="col-md-8">
                                <h4 class="text-success">Price</h4>
                              <button class="btn btn-dark h2"> GHc <?php echo $_c->price ?>
                              </button>
    		    
		                      <h4>More Details</h4>
		                  </div>  
		                  <div class="col-md-6">
		                     <ul>
		                         <li><strong>Year :</strong> <?php echo $_c->year ?> </li>
		                         <li><strong>Fuel Type :</strong> <?php echo $_c->fuel ?> </li>
		                         <li><strong>Transmission :</strong> <?php echo $_c->transmission?> </li>
		                         <li><strong>Color :</strong> <?php echo $_c->color ?> </li>
		                        
                              </ul>
                              
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
               
		    </div> 
            
		    <div class="cars-gallery">
                
		       <div class="swiper-container gallery-top">
                   <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="swiper-zoom-container">
                <img src="<?php echo "../cars/$id/image1" ?>" >
                
                
                
            </div>
        </div>
    
    </div>
                       
               
             <div class="swiper-container gallery-thumbs">
                 <div class="swiper-wrapper">
                     <div class="row">
                         <div class="swiper-slide">
                             <div class="col">
                                 <div class="swiper-zoom-container">
                                     <img src="<?php echo "../cars/$_c->id/image2" ?>">
                                 </div>
                             </div>
                         </div>
                    <div class="swiper-slide">
                        <div class="col">
                            <div class="swiper-zoom-container">
                                <img src="<?php echo "../cars/$_c->id/image3"?>">
                            </div>
                        </div>
                         </div>

                         <div class="swiper-slide">
                             <div class="col">
                                 <div class="swiper-zoom-container">
                                     <img src="<?php echo "../cars/$_c->id/image4"?>">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                    </div>
            </div>
                </div>
                
                       </div>
        <div>
            <div class="col-md-12"><br><br>
		                      <h4>More Car Description</h4>
        </div>     
                              <form>
                              <textarea class="form-control bg-dark text-white" id="email" name="message" style="width:300px; height:200px" readonly="readonly"> 
                                <?php 
                                  echo $_c->description;
                                ?>
                                </textarea>
                              </form><br><br>
        <div class="col-md-12">
		                      <h4>Seller Contact</h4>
        </div> 
             <div class="card" style="width: auto;">
                    <div class="card-body">
                        <div class="card" style="width: 18rem;">
                            
                          </div>
                      <p class="card-text" style="font-weight: bold; font-size: 18px;"><i class="fa fa-user"></i>  <?php echo $_c->uname;?><br><i class="fa fa-phone"></i> <?php echo $_c->phone; ?><br><i class="fa fa-building"></i>  <?php echo $_c->location;?></p>
                      
                    </div>
                  </div>
              
		
</div>
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