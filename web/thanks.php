<!DOCTYPE html>
<html>
<head>
	<title>Congratulations</title>

	   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../res/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../res/css/fontawesome-all.min.css">
    <link rel="icon" href="../res/images/log.png" type="image/x-icon">





	<style type="text/css">
		.containe{
    background-image: url(../res/images/thanks.jpg);
      background-repeat: no-repeat;
    background-attachment: fixed;
  			 }

  			 .btn-group button {
    background-color:dark; /* Green background */
    border: 0px solid green; /* Green border */
    color: white; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: left; /* Float the buttons side by side */
    align-items: center;
    justify-content: center;
    align-content: center;
}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #3e8e41;
}
/* Container holding the image and the text */
.containe {
    position: relative;
}

/* Bottom right text */
.text-block {
    position: absolute;
    bottom: 65px;
    left: 20px;
    padding-left: 20px;
    padding-right: 20px;
}
	</style>


	
</head>
<body>
	 <nav class="navbar navbar-expand-lg bg-dark">
        <a class="navbar-brand text-white h1 font-weight-bolder" href="index1.php" style="font-size: 24px; font-weight: bolder;"><img src="../res/images/log.png"style="height: 40px; width: 40px;"><span class="text-success">DEMP</span> Cars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav nav-tabs ml-auto text-center" id="navtabs">
              <form method="GET" action="web/search.php" class="mx-5 form-inline justify-content-center">
                  <input class="form-control-md rounded-0 border-top-0 border-bottom-0 border-right-0 pl-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn-outline-white my-sm-0 rounded-0 border-top-0 border-bottom-0 border-left-0" type="submit">
                      <i class="fas fa-search"></i>
                  </button>
              </form>
            <li class="nav-item">
              <a class="nav-link bg-white active rounded-0 border-top-0 border-bottom-5 border-bottom-success border-right-0 border-left-0 h5 font-weight-bold text-success" href="../index.php">Home</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 pl-2 h5 font-weight-bold text-white" href="gallery.php">Gallery</a>
              </li>
                 <li class="nav-item">
                  <a class="nav-link rounded-0 border-top-0 border-bottom-5 border-right-0 border-left-0 pl-2 h5 font-weight-bold text-white bg-success" href="sell.php">Sell Car</a>
              </li>
          </ul>
     </div>
      </nav>
    <div class="containe">
    	<img src="../res/images/thanks.jpg">
    	<div class="text-block"> 
   <div class="btn-group btn-dark text-success">
 <a href="../index.php"><button class="text-white button-dark">Back to Home</button></a> 
</div>

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