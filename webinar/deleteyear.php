<?php 
include 'app/connect.php';

 session_start();
 if(!isset($_SESSION['Name']))
 {
   header("location:admin login.php");
 }

if (isset($_POST['submit'])) {
   
   $GRD = $_POST['GRD'];
   
  
  /*$sql = "DELETE FROM student WHERE GRAD =?"
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i",$GRAD);
  $result = $stmt->execute();
*/



  $sql = " DELETE FROM student WHERE GRAD = ? ";
  $stmt =$conn->prepare($sql);
  $stmt->bind_param("i",$GRD);
  $stmt->execute();
  echo "$stmt->error";
  
if($stmt){
  echo "deleted";
  ?>
  
  <?php
}
  else{
    echo "not deleted";
  }
  
   
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>CIS</title>



  <link rel="stylesheet" type="text/css" href="assests/login.css">
   

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
body
{
     background-image: url("img/year.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}

h1
{
   color:white;
   font-size: 70px;
   margin-top: 20%;
}          
nav 
{ 
  width:100%;
    height:80px;
    background-color:transparent;
  background:rgb(0,0,0,0.6);
    line-height: 50px;
  border-radius:10px;
  border-style:solid;
  border-color:grey;
  border-width:5px;
   
}
nav ul
{
    float: right;
    margin-right:30px
}
nav ul li
{
    list-style-type: none;
    display:inline-block;
    transition: 0.5s all;
                
}
nav ul li a
{
    text-decoration:none;
    color: #fff;
    padding: 40px;
  font-size:25px;
  font-style:oblique;
  font-weight:bold;
}
nav ul li:hover
{
    background-color:orange;
}

     table {
  border-collapse: collapse;
  width: 50%;
 
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  color: white;
}

tr:hover 
{
     background-color:#33BBFF;
     
}nav 
{ 
  width:100%;
    height:80px;
    background-color:transparent;
  background:rgb(0,0,0,0.6);
    line-height: 50px;
  border-radius:10px;
  border-style:solid;
  border-color:grey;
  border-width:5px;
   
}
nav ul
{
    float: right;
    margin-right:30px
}
nav ul li
{
    list-style-type: none;
    display:inline-block;
    transition: 0.5s all;
                
}
nav ul li a
{
    text-decoration:none;
    color: #fff;
    padding: 40px;
  font-size:25px;
  font-style:oblique;
  font-weight:bold;
}
nav ul li:hover
{
    background-color:orange;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

h1{
  color: white;
  height: 10%;
  text-align: center;
}
</style>
  
</head>
<body>
    <nav>  
      <ul> 
            <li><a href="admin after login.php">Dashboard</a></li>
            <li><a href="logout.php">logout</a></li>
            
        </ul>
    </nav>
 
    <form method="post" action="deleteyear.php">
           <fieldset>
            <label for="GRAD">Graduation Year</label>
            <input type="text" name="GRD"  placeholder="Enter the year" >
            <br> 
             
            <button type="submit" name="submit"><b>Submit</b></button>
            <br>
           </fieldset>
    </form>
  
       


    
</body>
</html>