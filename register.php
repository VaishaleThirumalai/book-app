<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php';

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$dob=$_POST['dob'];



$sql="select * from `registration` where username='$username'";

$result=mysqli_query($con,$sql);
if($result){

$num=mysqli_num_rows($result);
if($num>0){
echo "user already exist";


}else{
   $sql="insert into `registration`(username,password,email,dob) values('$username','$password','$email','$dob')";
   $result=mysqli_query($con,$sql);
   if($result){
       echo "signup succesfully";
      

       header('location:login.php');
   }else{
    die(mysqli_error($con));

   }
}
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

*{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
            body{
                font-family: sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
                background: #1690a7;
                margin-top: 80px;
            }
            form{
                background-color: white;
                width: 300px;
                height: 530px;
                padding-left: 30px;
                border: 1px solid gray;
                border-radius: 10px;
            }
            h2{
                margin: 20px 0;
                padding-bottom: 15px;
                text-align: center;
                color: blue;
            }
            input{
                margin-top: 5px;
                padding: 5px;
                outline: 0;
                border: 1px solid gray;
                border-radius: 3px;
            }
            button{
                margin-left: 30%;
                background-color: blue;
                color: white;
                height: 30px;
                width: 80px;
                border: none;
                border-radius: 3px;
                margin-bottom: 10px;
            }
            .inputext{
                width: 85%;
                border: 1px solid grey;
            }
            .error{
                color: #a64443;
                padding-bottom: 5px;
            }
            .btn{
                text-decoration:none;
                color:white;
            }
    



    </style>
</head>
<body>
    <form action="register.php" method="post">
        <h2>Registeration</h2>   
              <label for="username">Username</label>
              <br>
                 <input type="text" name="username" class="inputext" id="username">
              <br>
              <br>
              <label for="password">Password</label>
              <br>
                 <input type="text" name="password" class="inputext" id="password">
              <br>
              <br>
              <label for="email">Email id</label>
              <br>
                 <input type="email" name="email" class="inputext" id="email">
              <br>
              <br>
              <label for="dob">Date of Birth</label>
              <br>
                 <input type="date" name="dob" id="dob">
              <br>
              <br>
              
              <br>
              <button name="submit" class="btn">signin</button>
              <button ><a href="login.php" class="btn">login</a></button>
          </form>
</body>
</html>