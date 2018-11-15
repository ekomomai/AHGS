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
  <div class="container clearfix">
    <div id="user-detail">
      <h2 class="title1">Edit Student Information</h2>
      <form action="editdata.php" method="GET">
      <dl class="dl-responsive clearfix">
         <?php
 include 'dbconnect.php';

 $id = $_GET["idmember"];  
 $sql = "SELECT * FROM member where idmember=$id";
 $result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<dt>Name</dt><dd><input type='text' name='Name' class='form-control' required='required' value='" . $row["Name"]. "' maxlength='12'></dd>";
    echo "<dt>Gender</dt><dd><label for='male'><input type='radio' value='male' name='Gender' id='male' required='required'".(($row["Gender"]=="male")?'checked="checked"':"").">Male</label>
         <label for='female'><input type='radio' value='female' name='Gender' id='female' required='required'".(($row["Gender"]=="female")?'checked="checked"':"").">Female</label>
         <label for='other'><input type='radio' value='other' name='Gender' id='other' required='required'".(($row["Gender"]=="other")?'checked="checked"':"").">Other</label></dd>";
    echo "<dt>E-mail</dt><dd><input type='email' name='Email' class='form-control' required='required' value='" . $row["Email"]. "'></dd>";
    echo "<dt>Address</dt><dd><input type='text' name='Address' class='form-control' required='required' value='" . $row["Address"]. "'></dd>";
    echo "<dt>About me</dt><dd><textarea name='AboutMe' rows='5' cols='40' class='form-control' maxlength='200'>" . $row["AboutMe"]. "</textarea></dd>";
    $id = $row["idmember"];
    echo "<input type='hidden' value='" .$id. "' name='idmember'>";
         }
     } else {
      echo "0 results";
     }
?>
      </dl>     

      <div class="btn-area row clearfix">
        <div class="col-6 mar-auto">
          <div class="c-btn bg-blue3 radius"><input type="submit" value="Save" /></div>
        </div>      
      </div>
      </form>
    </div>
  </div>
</article>
</body>
</html>
