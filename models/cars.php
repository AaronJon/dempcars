<?php
	/**
	 * Class for Cars
	 */
	class Car 
	{
		
		function Car()
		{
			$this->id 	=				"";
			$this->brand	=			"";
			$this->model 	=			"";
			$this->year	= 			"";
			$this->color	=			"";
			$this->fuel	= 			"";
			$this->transmission	=	"";
			$this->carcondition	=	"";
			$this->price	= 			"";
			$this->description	= 	"";
			$this->uname	=			"";
			$this->phone	= 			"";
			$this->location	= 		"";
		}
		function Create($con,$car_blob)
		{
			##################################################
			// $this->id 	=			$car_blob["id"];
			$this->brand	=		$car_blob["brand"];
			$this->model 	=		$car_blob["model"];
			$this->year	= 		$car_blob["year"];
			$this->color	=		$car_blob["color"];
			$this->fuel	= 		$car_blob["fuel"];
			$this->transmission	=$car_blob["transmission"];
			$this->carcondition	=$car_blob["carcondition"];
			$this->price	= 		$car_blob["price"];
			$this->description	= $car_blob["description"];
			$this->uname	=		$car_blob["uname"];
			$this->phone	= 		$car_blob["phone"];
			$this->location	= 	$car_blob["location"];



			#################################################
			$query = "
			INSERT INTO cars(
			brand,model,year,color,fuel,transmission,carcondition,price,description,uname,phone,location) 
				
			VALUES(
			'$this->brand','$this->model','$this->year','$this->color','$this->fuel','$this->transmission','$this->carcondition','$this->price','$this->description','$this->uname','$this->phone','$this->location'
			);";

			#################################################
			$result = mysqli_query($con,$query);
			if($result){
				return true;
			}
			return false;
		}
		function getAll($con){

			##############################
			$query = "SELECT * from cars";
			###############################
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			$all_cars = array();
			while($row = mysqli_fetch_assoc($result)){
				$_c = new Car();
				$_c->id 	=			$row["id"];
				$_c->brand	=		$row["brand"];
				$_c->model 	=		$row["model"];
				$_c->year	= 		$row["year"];
				$_c->color	=		$row["color"];
				$_c->fuel	= 		$row["fuel"];
				$_c->transmission	=$row["transmission"];
				$_c->carcondition	=$row["carcondition"];
				$_c->price	= 		$row["price"];
				$_c->description	= $row["description"];
				$_c->uname	=		$row["uname"];
				$_c->phone	= 		$row["phone"];
				$_c->location	= 	$row["location"];
				array_push($all_cars, $_c);
			}
			return $all_cars;
			###############################
		}
		function getN($con,$N){
			###############################
			$query = "SELECT * from cars LIMIT $N";
			###############################
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			$n_cars = array();
			while($row = mysqli_fetch_assoc($result)){
				$_c = new Car();
				$_c->id 	=			$row["id"];
				$_c->brand	=		$row["brand"];
				$_c->model 	=		$row["model"];
				$_c->year	= 		$row["year"];
				$_c->color	=		$row["color"];
				$_c->fuel	= 		$row["fuel"];
				$_c->transmission	=$row["transmission"];
				$_c->carcondition	=$row["carcondition"];
				$_c->price	= 		$row["price"];
				$_c->description	= $row["description"];
				$_c->uname	=		$row["uname"];
				$_c->phone	= 		$row["phone"];
				$_c->location	= 	$row["location"];
				array_push($n_cars, $_c);
			}
			return $n_cars;
		}
		function get($con,$id){
			###############################
			$query = "SELECT * from cars where id='$id'";
			###############################
			$result = mysqli_query($con,$query) or die(mysql_error());
			$_c = new Car();
			if($row = mysqli_fetch_assoc($result)){
				$_c->id 	=			$row["id"];
				$_c->brand	=		$row["brand"];
				$_c->model 	=		$row["model"];
				$_c->year	= 		$row["year"];
				$_c->color	=		$row["color"];
				$_c->fuel	= 		$row["fuel"];
				$_c->transmission	=$row["transmission"];
				$_c->carcondition	=$row["carcondition"];
				$_c->price	= 		$row["price"];
				$_c->description	= $row["description"];
				$_c->uname	=		$row["uname"];
				$_c->phone	= 		$row["phone"];
				$_c->location	= 	$row["location"];
			}else{
				return NULL;
			}
			return $_c;
		}
	}
?>