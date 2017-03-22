<?php

	if(count($_POST['data'])>0){
		$name = $_POST['data'][0];
		$email = $_POST['data'][1];
		$tech = $_POST['data'][2];
		$availability = $_POST['data'][3];
		$age = $_POST['data'][4];


        $sql = "SELECT * FROM participants WHERE email='".$email."'";
        $result = $con->query($sql);

        if ($result->num_rows == 0) {
            // output data of each row
            $strSQL = "INSERT INTO participants VALUES( null, '$name', '$email', '$tech', '$availability', '$age', 1)";
            if(mysqli_query($con, $strSQL))
                echo "ok";
            else
                echo "ko-insert";
        } else {
            echo "ko-email";
        }

        $con->close();

	}

?>