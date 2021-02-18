<?php 
$name = $email = $integer = '';
$errorName= $errorEmail = $errorInteger = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $errorName = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $errorName = "Only letters and white space allowed";
    }
  }


$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

 
if (!filter_var($integer, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
       

  echo "Name: ".$name."Email: ".$email."integer".$integer;


}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<html>
<head>
  <title class="text">Forms</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

  
  <div class="container container-fluid">
    <h1>Forms</h1>
    <form action="forms1.php" method="post">
    <div class="row">
      <div class= "form-group" >
         <label>Name</label>
        <input type="text" class="form-control" name="Name" placeholder="User_name">
      <span class="error">* <?php echo $errorName;?></span>
      </div>
      </div> 

      <div class="form-group">
         <label>Email</label>
        <input class="form-control" type="email" name="email" placeholder="Enter_email">
      <span class="error">* <?php echo $errorEmail;?></span>
      </div> 
    
       <div class="form-group">        
  <label>Integer</label>
   <input class="form-control" type="number"  name="Integer" > 
</div>
<br>
        <div class="row">
      <div class="form-group" >
        <input type="submit" class="btn btn-primary form-control" name="save" value="Submit">
      </div>
      </div>
    </div>
    
  </form>
  </div>


</body>
</html>
