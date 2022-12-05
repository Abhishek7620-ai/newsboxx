<?php
	$eno=$_POST['eno'];
	$ename=$_POST['ename'];
	$addr=$_POST['addr'];
	$sal=$_POST['sal'];
	$dno=$_POST['dno'];

	$conn = new mysqli("localhost","root","","php");

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

	    
	    $res1="SELECT * FROM dept WHERE dno=$dno";
	    $res2 = mysqli_query($conn, $res1);

            if($row=mysqli_fetch_array($res2))
	    {  
		$res3="insert into emp values($eno,'$ename','$addr',$sal,$dno)";
		$res4 = mysqli_query($conn, $res3);
		
		if($res4)
			echo 'Employee Insertion done succeess fully:';
		else 
			echo 'Failed';
	    }	
	    else 
		echo 'Dno is not valid';
	
	mysqli_close($conn);

?>
