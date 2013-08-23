<?php

//	$db_conx = mysqli_connect( 'localhost','b31_13589920','ahmed123','b31_13589920_social') or die("Unable to connect to MySQL");
	$db_conx = mysqli_connect( 'localhost','root','','social') or die("Unable to connect to MySQL");

	//Evaluate the connection
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
		exit();		
	}
	
 ?>