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

$dataname = $_GET["Name"];
$dataaddress = $_GET['Address'];
$dataemail = $_GET['Email'];
$datagender = $_GET['Gender'];
$dataabout = nl2br($_GET['AboutMe']);

$id = $_GET["idmember"];
$sql = "UPDATE member SET Name='$dataname', Address='$dataaddress', Email='$dataemail', Gender='$datagender', AboutMe='$dataabout' WHERE idmember=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record is updated successfully";
} else {
  echo "Error during updating record: " . $conn->error;
}
?>
<p><a href="index.php">HOME</p>
</div>
</article>
</body>
</html>
