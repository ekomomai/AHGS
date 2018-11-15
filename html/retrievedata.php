<?php
 include 'dbconnect.php';
    
 $sql = "SELECT * FROM member";
 $result = $conn->query($sql);
            
 if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
 	  echo "Name: " . $row["Name"] . "<br>";
 	  echo "Email: " . $row["Email"] . "<br>";
 	  echo "Address: " . $row["Address"] . "<br>";
 	  echo "AboutMe: " . $row["AboutMe"] . "<br>";
 	  echo "Gender: " . $row["Gender"] . "<br><br><br>";
         }
     } else {
      echo "0 results";
     }
?>