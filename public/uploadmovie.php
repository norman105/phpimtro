<!DOCTYPE html>
<html>





<head>  
<title> Aardvvark</title>

  <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../js/main.js">
   <link rel="stylesheet" type="text/css" href="../css/style.css">
   <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootsrap-grid.css">
   <link rel="stylesheet" type="text/css" href="../bootsrap/css/bootstrap-grid.min.css">
   <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

   <meta charset="utf-8">




  
</head>
<br>
 
<body class="">
   <div class="container" >
<img id="icon" src="../images/icon.jpg"> <p>MOVIE SHOP </p></div>
><div class="container">
  <p class="bg-info">Rael and Real:buy one get two free</p></div>

<!-- button  -->
<div class="container">
<a href="../index.html">
  <button type="button" class="btn btn-primary">Back to Home Page</button>
</a> </div>






<!-- forms -->
<br>
  <div class="container container-fluid">
   <form id="jj" action="uploadmovie.php" method="post">

     <div class="row">
      <div class="col">
            <div class="form-group">
    <label  for="fnamre">Movie Name</label>
    <input type="text" name="moviename" class="form-control" placeholder="Moviename">
</div>
</div>
  
      <div class="col">
          <div class="form-group">        
  <label>Lead actor</label>
  <input type="text" name="leadactor" class="form-control" placeholder="Lead Actor">
</div>
    </div>
  </div>

     <div class="row">
      <div class="col">
            <div class="form-group">
    <label  for="fnamre">Duration</label>
    <input type="number" name="duration" value="hours" class="form-control" placeholder="Time in hours">
</div>
</div>
    
  
      
      <div class="col">
            <div class="forms-group">
              <div class="custom-file">
 <label class=" custom-file-label " for="validatedcustomfie"  >Movie Poster</label> 
    <input type="file" class=" form-control custom-file-input" placeholder="No file selected">
</div> 
</div>
</div>
</div>
      <div  class="row">
      <div class="col">

    <div class="form-group">
    <label  for="fnamre">Rating</label>
    <input type="text" name="rate" class="form-control" placeholder="Action">
</div> 
</div>
    
      <div class="col">
            <div class="form-group">
    <label  for="fnamre">Genre</label>
    <input type="text" name="genre" class="form-control" placeholder="PG">
</div>
</div>
</div> 
<br>
  
  <!-- button -->
 <div  class="row">
      <div class="col">
            <div class="form-group">
<label ><input id="sbt" class="btn btn-success" type="submit" name="save" value="SUBMIT MOVIE"></label>

</div>
</div>
     <div class="col">
            <div class="form-group">
<label ><input id="rst" class="btn btn-danger" type="reset" name="reset" value="RESET"></label>
</div>
</div>
</div>

</form>
</div>

<?php
  //define variables as empty tags or values

$Moviename ='';
$Leadactor='';
$Duration ='';
$Rating ='';
$Genre ='';


//isset
  if (isset($_POST['save'])) {
    # code...


 $Movie_name = $_POST['moviename'];
$Lead_Actor= $_POST['leadactor'];
$Duration =$_POST['duration'];
$Rating =$_POST['rate'];
$Genre =$_POST['genre'];


echo   $Movie_name."<br>".$Lead_Actor."<br>".$Duration."<br>".$Rating."<br>".$Genre;
}

?>





</body> 
</html>