<?php
   	include 'connection.php';

   	if(isset($_POST['contactButton']))
   	{
	   	$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
	   	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
	   	$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
	   	$message = mysqli_real_escape_string($conn, $_REQUEST['message']);   		
	   	
		$sql = "INSERT INTO contact_queries (name, email, contact, query) VALUES ('$name', '$email', '$contact', '$message')";
		
		if(mysqli_query($conn, $sql))
		{
			echo '<script language="javascript"> 
			alert("Records inserted successfully.");
			window.location.href="../index.html"; 
			</script>';
		} 
		else
		{
			echo '<script language="javascript"> 
	    	alert("Sorry.. please try again."); 
			window.location.href="../member_request.html"; </script>';
		}
	}
	
	if(isset($_POST['submit-signin']))
   	{
	   	$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
	   	$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
	   	
		$sql_Login_Member = "SELECT * from member_signin where username = '$username' && password = '$password'";
		$sql_Login_Admin = "SELECT * from admin_signin where username = '$username' && password = '$password'";

		$Member_Query = mysqli_query($conn, $sql_Login_Member);
		$Admin_Query = mysqli_query($conn, $sql_Login_Admin);

		$Member_Query_Count = mysqli_num_rows($Member_Query);
		$Admin_Query_Count = mysqli_num_rows($Admin_Query);


		if($Member_Query_Count == 1 )
		{
			echo '<script language="javascript"> 
			alert("Logged in successfully.");
			window.location.href="../member_siggned_in.html"; 
			</script>';
			// echo "siggned in member";
		} 
		else
		{
			if($Admin_Query_Count == 1 )
			{
				echo '<script language="javascript"> 
				alert("Logged in successfully.");
				window.location.href="../admin_siggned_in.html"; 
				</script>';
				// echo "siggned in admin";
			}
			else
			{
				echo '<script language="javascript"> 
		    	alert("Sorry.. please try again."); 
				window.location.href="../contact-login.html"; </script>';				
				// echo "errors";
			}
		}
	}
?>



