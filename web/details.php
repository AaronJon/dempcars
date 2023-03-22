	
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dempcars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn-> connect_error) {
	die("connection failed:" $conn-> connect_error);
}
 $sql = "SELECT image1, brand, price, carcondition, location from cars";
 $result = $conn-> query($sql);



 
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo . $row["image1"]. " " . $row["brand"]. " " . $row["price"]. " " . $row["carcondition"]. " " . $row["location"]. "<br>";
    }

    		#displayin data

    		<div class="col">
                <div class="card" style="width: auto;">
                  <div class="card-body">
                      <div class="card" style="width: 18rem;">
                          <div class="card-body">
                            <img src= "<?php echo $sql['../res/images/image1'] ?>" />
                          </div>
                        </div>
                        <p class="card-text"><?php echo $sql['brand']?><br><?php echo $sql['price']?><br><?php echo $sql['carcondition']?><br><?php echo $sql['location']?></p>
                      <a href="web/pro.php" class="card-link text-dark"><button type="button" class="btn btn-outline-success">Read more</button></a>
                  </div>
                </div>
            </div>
?>

<?php
$conn->close();

?>
