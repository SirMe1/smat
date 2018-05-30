<!<?php 
	// variables used to connect to the database
	$servername ="localhost";
	$username = "root";
	$password = "3lephantK1d";
	$database = "smat_database1";

	//create the connection

	$data_bs = mysqli_connect($servername,$username,$password,$database);

	//check the connection success
	if (!$data_bs) {
		die("connection failed: " . mysqli_connect_error());
	}else 
	{
		echo "<br>"."connected";
	}


 ?>