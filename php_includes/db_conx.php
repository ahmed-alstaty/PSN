<?php

	$db_conx = mysqli_connect('mysql17.000webhost.com','a7859709_ahmad','ahmed123','a7859709_social') or die("Unable to connect to MySQL");
	//Evaluate the connection
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
		exit();		
	}
	
 ?>