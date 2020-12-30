<?php 
include 'app/connect.php';
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:admin login.php");

}

if(isset($_POST['submit'])){

    $CID = $_POST['CID'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
       
    $cid_check = "SELECT * FROM company WHERE COMPANYID = ?";
    $cid_stmt = $conn->prepare($cid_check);
    $cid_stmt->bind_param("i",$CID);
    $cid_stmt->execute();

    $cid_stmt->store_result();
    if($cid_stmt->num_rows()>0){
        ?> 
        <script> alert(" Company Already Registered!"); </script>
        <?php
    }
    else{


    //template for the sql query
    $sql = "INSERT INTO company(COMPANYID,NAME,EMAIL,PHONE) VALUES(?,?,?,?)";

    //preparing the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issi",$CID,$Name,$Email,$Phone);
    $result = $stmt->execute();

    if($result)
    {
      ?>
       <script> alert("Company Registeration Successfull");</script>
    <?php
       //header("location:Alogin after.php");
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
	<title>Company blank page</title>
	</head>
   <link rel="stylesheet" type="text/css" href="assests/registration.css">
	<style>
		body{
		background-size: cover;
	    background-attachment: fixed;
	    height: auto;
	    background-image:url("img/company.jpg");
	    background-repeat: no-repeat;
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
      #p{
      	text-align: center;
      	text-decoration: underline;
        font-style: oblique;
        color:white;
        font-weight: bold;
      }
      ::placeholder{
        color:white;

      }

	</style>
	<body>
		  <nav>
      <ul>
    
         <li>
            <a href="admin after login.php">Dashboard</a>
         </li>
         <li>
            <a href="logout.php">Logout</a>
         </li>
      </ul>
</nav>
	<div id="p">
	<h2>Company  Details</h2>
</div>
<div class="company">
<form action="company.php" method="post">
<fieldset>
            
            <label  id="a" for="CID">Company ID</label><br>
            <input type="number" name="CID" maxlength="10"  placeholder="Enter  Company id" required autocomplete="off">
            <br> 
             <label id="c" for="Name">Name</label><br>
            <input type="text" name="Name" placeholder="Enter Name" required autocomplete="off" >
            <br> 
            <label id="c" for="Email">Email</label><br>
            <input type="email" name="Email" placeholder="Enter Email" required autocomplete="off" >
            <br> 
            <label id="c" for="Phone">Phone</label><br>
            <input type="tel" name="Phone" placeholder="Enter Phone" required autocomplete="off" >
            <br> 


            <button type="submit" name="submit"><b>Submit</b></button>
            
             <br>
           </fieldset>
         </form>
  </div>       

	</body>
</html>