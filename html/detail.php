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
<body>
<header class="clearfix">  
      <div class="container">
        <h1 class="logo"><a href="index.php"><img src="images/logo.png" alt="AHGS"></a></h1>
        <div class="add-btn c-btn bg-blue radius"><a href="add.php">Add new student</a></div>
      </div>
</header>
<article id="main">
  <div class="container clearfix">
    <div id="user-detail">
      <h2 class="title1">Student Information</h2>
      <dl class="dl-responsive clearfix">
         <?php
 include 'dbconnect.php';

 $id = $_GET["idmember"];  
 $sql = "SELECT * FROM member where idmember=$id";
 $result = $conn->query($sql);
            
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<dt>Name</dt><dd>" . $row["Name"]. "</dd>";
    echo "<dt>Gender</dt><dd>" . $row["Gender"]. "</dd>";
    echo "<dt>E-mail</dt><dd>" . $row["Email"]. "</dd>";
    echo "<dt>Address</dt><dd>" . $row["Address"]. "</dd>";
    echo "<dt>About me</dt><dd>" . $row["AboutMe"]. "</dd>";
    $id = $row["idmember"];
         }
     } else {
      echo "0 results";
     }
?>
      </dl>

      
      <div class="btn-area row clearfix">
        <div class="col">
          <div class="c-btn bg-gray radius"><input type="button" value="Delete" onClick="disp()"></div>
        </div>
        <div class="col">
<?php echo "<div class='c-btn bg-blue3 radius'><a href='edit.php?idmember=" .$id. "'>Edit</a></div>";?>
        </div>      
      </div>
    </div>

  </div>
</article>
<script type="text/javascript">

function disp(){

  if(window.confirm('Are you sure you want to delete?')){

    location.href = "deletedata.php?idmember=<?php echo $id; ?>" ; // 

  }

}
</script>
</body>
</html>
