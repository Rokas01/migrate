<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$date = $_POST['date'];
	$email = $_POST['email'];
		
	// checking empty fields
	if(empty($name) || empty($date) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Laukas tuscias.</font><br/>";
		}
		
		if(empty($date)) {
			echo "<font color='red'>Laukas tuscias.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Laukas tuscias.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(name,date,email) VALUES('$name','$date','$email')");
		
		//display success message
		echo "<font color='green'>Sekmingai prideta.";
		echo "<br/><a href='index.php'>Perziureti</a>";
	}
}
?>
</body>
</html>
