
<?php
$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$color = $_POST['color'];
$fuel = $_POST['fuel'];
$transmission = $_POST['transmission'];
$carcondition = $_POST['carcondition'];
$price = $_POST['price'];
$description = $_POST['description'];
$image1 = $_POST['image1'];
$image2 = $_POST['image2'];
$image3 = $_POST['image3'];
$image4 = $_POST['image4'];
$uname = $_POST['username'];
$phone = $_POST['number'];
$location = $_POST['location'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dempcars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


 $INSERT = "INSERT Into cars (brand, model, year, color, fuel,transmission, carcondition, price, description, image1, image2, image3, image4, uname, phone, location) values( '$brand', '$model ' , '$year' , '$color' , '$fuel', '$transmission' , '$carcondition' , '$price' , '$description' , '$image1' , '$image2' , '$image3', '$image4' , '$uname' , '$phone' , '$location')";

if ($conn->query($INSERT) === TRUE) {
   
   echo include 'gallery.php';

} else {
    echo "Error: " . $INSERT . "<br>" . $conn->error;
}

$conn->close();
?>