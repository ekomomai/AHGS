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

$sql_check = "SELECT * FROM member WHERE Name='$dataname'";
$result = $conn->query($sql_check);
if ($result->num_rows > 0) {
	echo "$dataname is already registerd";
}
else {
$sql = "INSERT INTO member (Name, Address, Email, Gender, AboutMe)
VALUES ('$dataname', '$dataaddress', '$dataemail', '$datagender', '$dataabout')";

// try {

// $pdo = new PDO($dataname);
// $stmt = $pdo->prepare('SELECT COUNT(*) FROM member WHERE Name=$dataname');
// $count = (int)$stmt->fetchColumn();

// }
// if ($count === 0) {
// 	$stmt->execute([$dataname]);
//  } catch (PDOException $e) {
//             $errorMessage = 'データベースエラー';
//             // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
//             echo $e->getMessage();
//         }

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

<p><a href="index.php">HOME</p>
</div>
</article>
</body>
</html>