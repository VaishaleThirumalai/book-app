<?php
$login=0;
$invalid=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php';

$username=$_POST['username'];
$password=$_POST['password'];



$sql="select * from `registration` where username='$username' and password='$password'";

$result=mysqli_query($con,$sql);
 if($result){

$num=mysqli_num_rows($result);
if($num>0){

$login=1;
session_start();
$_SESSION['username']=$username;
echo "<script>window.open('index.html','_self')</script>";

}else{
    $invalid=0;

  

}
}

 }

?>


<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signuppage</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
 
  <?php
   if($login){

 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>success</strong> you are success full loging in.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>' ;

  }

  ?>

<?php
   if($invalid){

 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>error</strong>invalid credential.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>' ;

  }

  ?>




    <h1 class="text-center">login to our website<h1>
    
  <div class="container mt-5">
  <form action="" method="post">
  
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Name</label>
      <input type="text" class="form-control" placeholder="enter your username" name="username">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">password</label>
      <input type="text" class="form-control" placeholder="enter your password" name="password">
    </div>
   
    <button type="submit" class="btn btn-primary w-100">Submit</button>
 
</form>



    </div>
    
  </body>
</html>