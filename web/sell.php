<?php
include("../models/db.php");
include("../models/cars.php");
if (isset($_POST["model"])) {
  $_c = new Car();
  $_c->create($con,$_POST);
  if($_c){
    $id=mysqli_insert_id($con);
    $target_path = "C:/xampp/htdocs/dempcars/cars/$id/";  
    mkdir($target_path);
    for ($index=1; $index <= 4; $index++) { 
      $imagename = "";
      $imagename = "image".$index;
      // $imageFileType = strtolower(pathinfo(basename($_FILES[$imagename]["name"]),PATHINFO_EXTENSION));
      $new_target_path = $target_path .$imagename; 
      if(move_uploaded_file($_FILES[$imagename]['tmp_name'], $new_target_path)) {
        // UPLOADED SUCCESSFULLY
         header("Location: gallery.php");
      }else{
        // FAILED TO UPDLOAD IMAGES
      }
    }
  }else{
    // FAILED DUE TO WRONG CAR DATA
  }
}
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
                  <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 h5 font-weight-bold text-white" href="gallery.php">All Cars</a>
              </li>
                 <li class="nav-item">
                  <a class="nav-link bg-white active rounded-0 border-top-0 border-bottom-5 border-bottom-success border-right-0 border-left-0 h5 font-weight-bold text-success" href="#">Sell Car</a>
              </li>
          </ul>
     </div>
      </nav>

<div class="container">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h3> Car Details</h3>	
	<hr class="soft"/>
	<p class="text-center">Fill form to upload car</p>
	
	<form method="POST" action="./sell.php" enctype="multipart/form-data">
    <div class="form-group input-group">
    	
		<select class="form-control" name="brand" required>
			<option selected=""> Brand Type</option>
			<option>Toyota</option>
			<option>Honda</option>
      <option>Volkswagen</option>
			<option>Mercedes</option>
            <option>Subaru</option>
			<option>Nissan</option>
			<option>Audi</option>
            <option>Isuzu</option>
			<option>Lamborghini</option>
			<option>Bentley</option>
            <option>BMW</option>
			<option>Land Rover</option>
			<option>Suzuki</option>
            <option>Haojing</option>
            <option>Jaguar</option>
			<option>Jeep</option>
			<option>Kia</option>
            	<option>Mazda</option>
            <option>Chrysler</option>
			<option>Infinity</option>
			<option>Mitsubishi</option>
            
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	
        <input class="form-control" placeholder="Car Model" name="model" type="model" required>
    </div> <!-- form-group// -->
        
        	
         <div class="form-group input-group">
           
        <input class="form-control" placeholder="Car Model Year" name="year" type="number" required>
    </div>
        
    <div class="form-group input-group">
    
        <input class="form-control" placeholder="Color" name="color" type="text" required>
    </div> <!-- form-group// -->  
        <div class="form-group input-group">
    	
		<select class="form-control" name="fuel" required>
			<option selected=""> Fuel Type</option>
			<option>Petrol</option>
			<option>Gas</option>
			<option>Diesel</option>
      <option>Electric</option>
		</select>
	</div> <!-- form-group end.// -->
        <div class="form-group input-group">
    	
		<select class="form-control" name="transmission" required>
			<option selected="">Transmission Type</option>
			<option>Manual</option>
			<option>Automatic</option>
		</select>
      	</div> <!-- form-group end.// -->
        <div class="form-group input-group">
    	
		<select class="form-control" name="carcondition" required>
			<option selected=""> Condition</option>
			<option>Brand new</option>
			<option>Slightly used</option>
			<option>Old</option>
		</select>
	</div> <!-- form-group end.// -->
        	
         <div class="form-group input-group">
             <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-money"></i>GHc </span>
             </div>
        <input class="form-control" placeholder="Car Price" type="number" name="price" required>
    </div>
        
        <div class="form-group input-group">
			<div class="controls">
			  <textarea placeholder="car description" name="description" cols="45px;" rows="06px;" required></textarea>
			</div>
		</div>
        <h5> Choose Car Images </h5>	
	<hr class="soft"/>
        
    <div class="form-group input-group">
        <div class="input-default-wrapper ">
            <span class="input-group-text " id="input1">Upload Image 1</span>
            <input type="file" id="file-with-current" name="image1" class="input-default-js" required>
        </div>
    </div> 
         <div class="form-group input-group">
        <div class="input-default-wrapper ">
            <span class="input-group-text " id="input1">Upload Image 2</span>
            <input type="file" id="file-with-current" name="image2" class="input-default-js" required>
        </div>
    </div> 
         <div class="form-group input-group">
        <div class="input-default-wrapper ">
            <span class="input-group-text " id="input1">Upload Image 3</span>
            <input type="file" id="file-with-current" name="image3" class="input-default-js" required>
        </div>
    </div> 
         <div class="form-group input-group">
        <div class="input-default-wrapper ">
            <span class="input-group-text " id="input1">Upload Image 4</span>
            <input type="file" id="file-with-current" name="image4" class="input-default-js" required>
        </div>
    </div> 
        
        <fieldset>
            <legend > <H3>Seller Details</H3></legend> 	
	<hr class="soft"/>
         <div class="form-group input-group">
    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input class="form-control" placeholder="UserName" name="uname" type="text" required>
    </div>
        	
         <div class="form-group input-group">
    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		 </div>
        <input class="form-control" placeholder="Phone Number" name="phone" type="tel" required>
    </div>
        	
         <div class="form-group input-group">
    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		 </div>
        <input class="form-control" placeholder="Location" name="location" type="text" required>
    </div>
            </fieldset>
        <div class="form-group input-group">
    <div class="form-group">
        <a href="#" > <button type="submit" class="btn btn-dark btn-block"> Upload Details</button> </a>
    </div> <!-- form-group// -->      
        </div>
        
        
        
</form> <!-- card.// -->

    </article>
    </div>
    </div>
    
<!--container end.//-->

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