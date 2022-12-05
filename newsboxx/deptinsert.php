<?php
	$dno=$_POST['dno'];
	$dname=$_POST['dname'];
	$loc=$_POST['loc'];

	$conn = new mysqli("localhost","root","","php");

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO dept VALUES ($dno,'$dname','$loc')";

            if (mysqli_query($conn, $sql)) 
		{
         		echo 'New Record saved successfully';
         	} 
	    else 
	       {
            	echo 'Error in adding database: ' . mysqli_error($conn);
               }
?>
