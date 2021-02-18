
<?php
//define vatiables to store users input
$fname; 
$email;
$fname = '';
$email = '';
$errorFirst;
$errorEmail;
$errorEmail = '';
$errorFirst = '';


if (isset($_POST['save'])) {
if (empty($_POST['firstName'])) {
    $errorFirst = "First name is empty";
  } else {
    $fname = $_POST['firstName'];
  }


    if (empty($_POST['email'])) {
    $errorFirst = "Email address is empty";
  } else {
    $email = $_POST['email'];
  }

  echo "First Name: ".$fname."Email: ".$email;
}


//test_input function //data validation //works well on live server
function test_input ($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data - htmlspecialchars($data);

  return $data;
}



?>



<html>
<head>
  <title>Forms</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  
  <div class="container container-fluid">
     <h1>Forms Class</h1>
    <form action="form.php" method="post">
    <div class="row">
      <div class="col form-group" >
        <input type="text" class="form-control" name="firstName" placeholder="First Name">
        <spam><?php  echo $errorFirst; ?></spam>
      </div>
      <div class="col form-group">
        <input class="form-control" type="email" name="email" placeholder="email">
        <?php echo $email; ?>
      </div>
      
    </div>
          <br>
        <div class="row">
      <div class="col form-group" >
        <input type="submit" class="btn btn-primary form-control" name="save" value="Submit">
      </div>
      <div class="col form-group">
        <input type="reset" class="btn btn-warning form-control" name="warn" value="Reset">
        
      </div>
      
    </div>
    
  </form>
  </div>


</body>
</html>