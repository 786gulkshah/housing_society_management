<?php
   	include 'connection.php';
   	if(isset($_POST['complaints']))
   	{
		$sql = "SELECT * FROM complaints";

		$result = mysqli_query($conn,$sql) or die(mysqli_error());

		echo "<table border='1px solid black'>";
		echo "<tr>
		<th>name</th>
		<th>contact</th>
		<th>email</th>
		<th>plot_details</th>
		<th>title</th>
		<th>description</th>
		<th>document_name</th>
		<th>document</th>
		</tr>";

		while($row = mysqli_fetch_array($result)) 
		{
		    $name = $row['name'];
		    $contact = $row['contact'];
		    $email = $row['email'];
		    $plot_details = $row['plot_details'];
		    $title = $row['title'];
		    $description = $row['description'];
		    $document_name = $row['document_name'];

		    echo "<tr>
		    <td style='width: 200px;'>".$name."</td>
		    <td style='width: 200px;'>".$contact."</td>
		    <td style='width: 200px;'>".$email."</td>
		    <td style='width: 200px;'>".$plot_details."</td>
		    <td style='width: 200px;'>".$title."</td>
		    <td style='width: 200px;'>".$description."</td>
		    <td style='width: 200px;'>".$document_name."</td>
		    <td style='width: 200px;'> <a href='uploads-complaints/".$document_name."'>".$document_name."</a></td>
		    </tr>";
		} 
	    echo "</table>";
	}

	if(isset($_POST['committee']))
   	{
		$sql = "SELECT * FROM member_request";

		$result = mysqli_query($conn,$sql) or die(mysqli_error());

		echo "<table border='1px solid black'>";
		echo "<tr>
		<th>name</th>
		<th>email</th>
		<th>contact</th>
		<th>department</th>
		<th>message</th>
		</tr>";

		while($row = mysqli_fetch_array($result)) 
		{
		    $name = $row['name'];
		    $contact = $row['contact'];
		    $email = $row['email'];
		    $department = $row['department'];
		    $message = $row['message'];

		    echo "<tr>
		    <td style='width: 200px;'>".$name."</td>
		    <td style='width: 200px;'>".$email."</td>
		    <td style='width: 200px;'>".$contact."</td>
		    <td style='width: 200px;'>".$department."</td>
		    <td style='width: 200px;'>".$message."</td>
		    </tr>";
		} 
	    echo "</table>";
	}

	if(isset($_POST['enquiry']))
   	{
		$sql = "SELECT * FROM contact_queries";

		$result = mysqli_query($conn,$sql) or die(mysqli_error());

		echo "<table border='1px solid black'>";
		echo "<tr>
		<th>name</th>
		<th>email</th>
		<th>contact</th>
		<th>query</th>
		</tr>";

		while($row = mysqli_fetch_array($result)) 
		{
		    $name = $row['name'];
		    $contact = $row['contact'];
		    $email = $row['email'];
		    $query = $row['query'];

		    echo "<tr>
		    <td style='width: 200px;'>".$name."</td>
		    <td style='width: 200px;'>".$email."</td>
		    <td style='width: 200px;'>".$contact."</td>
		    <td style='width: 200px;'>".$query."</td>
		    </tr>";
		} 
	    echo "</table>";
	}

   	if(isset($_POST['meetingDoc']))
   	{
	   	$destination_path = getcwd().DIRECTORY_SEPARATOR;
		$target_path = $destination_path . "meetings/" . basename( $_FILES["meetingAbstract"]["name"]);
		$file_name = basename( $_FILES["meetingAbstract"]["name"]);

	   	$sql = "INSERT INTO meetings (meeting_abstract_file) VALUES ('$file_name')";

		if((mysqli_query($conn, $sql)) && (move_uploaded_file($_FILES['meetingAbstract']['tmp_name'], $target_path)))
		{
			echo '<script language="javascript"> 
			alert("Records inserted successfully.");
			window.location.href="../admin_siggned_in.html";
			</script>';
		}
		else
		{
			echo '<script language="javascript"> 
	    	alert("Sorry.. please try again.");
	    	window.location.href="../admin_siggned_in.html";
	    	</script>';
		}
   	}

   	if(isset($_POST['noticeDocButton']))
   	{
	   	$destination_path = getcwd().DIRECTORY_SEPARATOR;
		$target_path = $destination_path . "notices/" . basename( $_FILES["noticeDoc"]["name"]);
		$file_name = basename( $_FILES["noticeDoc"]["name"]);

	   	$sql = "INSERT INTO notices (notice) VALUES ('$file_name')";

		if((mysqli_query($conn, $sql)) && (move_uploaded_file($_FILES['noticeDoc']['tmp_name'], $target_path)))
		{
			echo '<script language="javascript"> 
			alert("Records inserted successfully.");
			window.location.href="../admin_siggned_in.html";
			</script>';
		}
		else
		{
			echo '<script language="javascript"> 
	    	alert("Sorry.. please try again.");
	    	window.location.href="../admin_siggned_in.html";
	    	</script>';
		}
   	}


?>



	