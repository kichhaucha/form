<?php
$insert=false;
if (isset($_POST['name'])){
error_reporting(0);
// connect to data base
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
// echo "Connected successfully";

// collect post variable
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql="INSERT INTO `itr`.`itr` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name','$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

if($conn->query($sql)==true){
  // echo "succesfully insert";
  $insert=true;
}
else{
   echo "eroor: $sql <bar> $conn->error";  
}
$conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <style>
        body {
  background-image: url('iitr2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
       * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.cont{
max-width: 80%;
/* background-color: rgb(198,152,241); */
padding: 34px;
margin: auto;

}
.cont h1 ,p{
  text-align: center;
}
input,textarea{
    
    display: block;
    font-size: 16px;
    width: 80%;
    margin: 11px auto;
    padding: 7px;
    border: 2px solid black;
    border-radius: 12px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    opacity: 0.6;
}
.btn{
    color: white;
    background-color: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}
.bj{
    width: 100%;
    position:absolute;
    z-index: -1;
}
.submis{
color: green;
}
    </style>
</head>
<body>
    <div class="cont">
        <h1>welcome to the IIT Roorkee trip form</h1>
        
       
          <p>enter your details and submit this form to confirm 
            participent
        </p>
        <?php
        if($insert==true){
        echo "<p class='submis'> thank for submision form for us trip</p>";
        }
         ?>
         
        <form action="" class="index php" method="post">
            <input class="text" name="name" id="name" placeholder="ENTER TOU">
        <input type="text" name="age" id="age" placeholder="Entere YOUR age">
        <input type="text" name="gender" id="gender" placeholder="enter your gender">
        <input type="text" name="email" id="email" placeholder="@email">
        <input type="text" name="phone" id="phone" placeholder="phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="entre other information here " ></textarea>
        <button class="btn" >submit </button>
        
        </form>
    </div>
    <script>
        src="index.js"
    </script>
    
</body>
</html>