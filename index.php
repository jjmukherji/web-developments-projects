<?php
if(isset($_POST['name'])){
  $server="localhost";
  $username="root";
  $password="";

  $con=mysqli_connect($server, $username, $password);
  if(!$con){
    die("connection to this db failed due to:" . mysqli_connect_error());
  }
 // echo "succes connecting to the Database";
 $name=$_POST['name'];
 $age=$_POST['age'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $desc=$_POST['desc'];
 $course=$_POST['course'];
 $sql="INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `course`, `description`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$course\r\n', 'I happy to do this\r\n\r\n', current_timestamp());";
// echo $sql;
   if($con->query($sql) == true){
   // echo "succesfully inserted";
   }
   else{
    echo "ERROR : $sql <br> $con->error";   
   }
 $con->close();
}


 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Mayuke Particiaption Form</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <img  class="bg" src="bvv.jpg" alt="Banasthali">

    <div class=" container">
        <h2> Welcome to Banasthali Vidhyapith Mayuke</h2>
        <p> Enter your details and submit this form to confirm your participation</p>
        <p class="sumbmitmessg">Thanks for submitting this form</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your mobile number">
            <input type="text" name="course" id="course" placeholder=" Enter your course">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder=" Enter about yourself"></textarea>
        <button class="btn">Submit</button>
        </form>
    </div>
    <script src="project.js"></script>
    
</body>
</html>
