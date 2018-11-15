<?php
include 'dbconnect.php';

$sql = "INSERT INTO member (Name, Address, Email, Gender, AboutMe)
VALUES ('Ryan Dupay', 'japanese address', 'ryandupay@gmail.com', 'male', 'about me')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
