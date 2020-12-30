<?php 
include 'app/connect.php';

if(isset($_POST['submit'])){

    $PID = $_POST['Personid'];
    $Name = $_POST['Name'];
    $Password = $_POST['Password'];
    
   

    $pass = password_hash($Password, PASSWORD_DEFAULT);
    
    $pid_check = "SELECT * FROM admin WHERE PERSONID = ?";
    $stmt = $conn->prepare($pid_check);
    $stmt->bind_param("s",$USN);
    $stmt->execute();

    $stmt->store_result();
    if($stmt->num_rows()>0){
        ?> 
        <script type="text/javascript"> alert(" User ALready Registered!");</script>
        <?php
    }
    else{


    //template for the sql query
    $sql = "INSERT INTO admin(PERSONID,NAME,PASSWORD) VALUES(?,?,?)";

    //preparing the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss",$PID,$Name,$pass);
    $result = $stmt->execute();

    if($result){
       header("location:admin login.php");
    }
  }
}
/*
    $expectedData = 1;
    $spoiledData = "1; DROP TABLE student";
    $query = "select * from student where USN = $spoiledData";
    select * from student where USN=1; 
    Drop table student;
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>The admin registration page</title>
</head>
<style>
	body{
    margin: 0;
    padding: 0;
    background: url(img/admin.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 450px;
	background:rgb(0,0,0,0.4);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
    font-style:oblique;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
    font-style:oblique;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    width:50%;
    margin:10px 70px;
    background:green;
    color: #fff;
    font-size: 18px;
    border-radius: 100px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background:yellow;
    color:green;
}
.loginbox a{
    text-decoration: none;
    font-size: 10px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}
p {
    font-style:oblique;
}
</style>
<body>
	<form onsubmit="return validate()" method="post" action="admin registration page.php">
	
		
			<div class="loginbox">
            <img src="img/avatar.png" class="avatar">   
			<h1>REGISTER</h1>
			<p>Person Id</p>
            <input type="text" name="Personid" placeholder="Enter Personid">
            <p>Name</p>
            <input type="text" name="Name" placeholder="Enter Your Name">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password">
            <input type="submit" name="submit" value="submit">
            </div>
	</form>
</body>
</html>