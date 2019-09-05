<?php
   	include 'connection.php';
   // echo "included file also";
   	$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
   	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
   	$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
   	$department = mysqli_real_escape_string($conn, $_REQUEST['department']);
   	$message = mysqli_real_escape_string($conn, $_REQUEST['message']);

   	$sql = "INSERT INTO member_request (name, email, contact, department, message) VALUES ('$name', '$email', '$contact', '$department', '$message')";
	
	if(mysqli_query($conn, $sql))
	{
		echo '<script language="javascript"> 
		alert("Records inserted successfully.");
		window.location.href="../index.html"; 
		</script>';

		// echo "Records inserted successfully.";
	} 
	else
	{
  //   	echo '<script language="javascript"> 
  //   	alert("' . mysqli_error($conn) . '"); 
		// window.location.href="../member_request.html"; </script>';
		echo '<script language="javascript"> 
    	alert("Sorry.. please try again."); 
		window.location.href="../member_request.html"; </script>';
	}
?>