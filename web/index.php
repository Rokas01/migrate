<?php
$servername = "sql7.freemysqlhosting.net";
$username = "sql7147806";
$password = "Ezuy3DJCJ8";
$dbname = "sql7147806";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO CRUD (name, date, address)
VALUES ('John', '2014-11-11', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>