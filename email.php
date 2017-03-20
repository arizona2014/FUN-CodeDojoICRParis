<?php

	if(count($_POST['data'])>0){
		$name = $_POST['data'][0];
		$email = $_POST['data'][1];
		$tech = $_POST['data'][2];
		$availability = $_POST['data'][3];
		$age = $_POST['data'][4];

        $con = mysqli_connect('185.98.131.94','coder812253','h5tquu9mgw','coder812253') or die("Some error occurred during connection " . mysqli_error($con));
        $strSQL = "INSERT INTO participants VALUES( null, '$name', '$email', '$tech', '$availability', '$age', 1)";
        if(mysqli_query($con, $strSQL))
			echo "ok";
        else
			echo "ko";
	}

?>