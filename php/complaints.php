<?php
   	include 'connection.php';

   	$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
   	$contact = mysqli_real_escape_string($conn, $_REQUEST['contact']);
   	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
   	$plot_details = mysqli_real_escape_string($conn, $_REQUEST['plot_details']);
   	$title = mysqli_real_escape_string($conn, $_REQUEST['complaint_type']);
   	$description = mysqli_real_escape_string($conn, $_REQUEST['description']);
   	
   	if(isset($_POST['submit']))
   	{
	   	$destination_path = getcwd().DIRECTORY_SEPARATOR;
		$target_path = $destination_path . "uploads-complaints/" . basename( $_FILES["supporting_documents"]["name"]);
		$file_name = basename( $_FILES["supporting_documents"]["name"]);

	   	$sql = "INSERT INTO complaints (name, contact, email, plot_details, title, description, document_name) VALUES ('$name', '$contact', '$email', '$plot_details', '$title','$description', '$file_name')";

		if((mysqli_query($conn, $sql)) && (move_uploaded_file($_FILES['supporting_documents']['tmp_name'], $target_path)))
		{
			echo '<script language="javascript"> 
			alert("Records inserted successfully.");
			window.location.href="../index.html"; </script>';
		}
		else
		{
			echo '<script language="javascript"> 
	    	alert("Sorry.. please try again."); 
			window.location.href="../member_request.html"; </script>';
		}
   	}
?>



	