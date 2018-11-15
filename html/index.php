<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AHGS Student Management</title>
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=montserrat' rel='stylesheet' type='text/css'>
</head>
<body>
<header class="clearfix">  
      <div class="container">
        <h1 class="logo"><a href="index.php"><img src="images/logo.png" alt="AHGS"></a></h1>
        <div class="add-btn c-btn bg-blue radius"><a href="add.php">Add new student</a></div>
      </div>
</header>
<article id="main">
  <div class="container">
    <div id="user-list" class="row">
      <?php
 include 'dbconnect.php';
    
 $sql = "SELECT * FROM member";
 $result = $conn->query($sql);
            
 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='col-6 col-md-4'>
           <a href='detail.php?idmember=" . $row["idmember"]. "' class='user-link bg-blue2 radius'>" . $row["Name"] . "</a></div>";
         }
     } else {
      echo "0 results";
     }
?>
    </div>
  </div>
</article>
</body>
</html>
