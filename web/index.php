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

$sql = "SELECT Name, Date, Address FROM CRUD";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["Name"]. " " . $row["Date"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>