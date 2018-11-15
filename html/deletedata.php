<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AHGS Student Management</title>
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css?1">
<link href='https://fonts.googleapis.com/css?family=montserrat' rel='stylesheet' type='text/css'>
</head>
<body class="complete">
<header class="clearfix">  
      <div class="container">
        <h1 class="logo"><a href="index.php"><img src="images/logo.png" alt="AHGS"></a></h1>
      </div>
</header>
<article id="main">
  <div class="container clearfix text-center">
<?php
include 'dbconnect.php';

    $id = $_GET["idmember"];  
    $sql = "DELETE FROM member WHERE idmember=$id";

    if ($conn->query($sql) === TRUE) {
       echo "Record is deleted successfully";
    } else {
       echo "Error during deleting record: " . $conn->error;
}
?>
<p><a href="index.php">HOME</a></p>
</div>
</article>
</body>
</html>