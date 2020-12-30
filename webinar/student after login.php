<?php
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:admin login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin after login</title>
</head>
<style>
	body{
		background-size: cover;
	    background-attachment: fixed;
	    height: auto;
	    background-image:url("img/webinar2.jpg");
	    background-repeat: no-repeat;
      }
     nav 
{ 
  width:100%;
    height:80px;
    background-color:transparent;
   background:rgb(0,0,0,0.4);
    line-height: 50px;
   border-radius:10px;
   border-style:solid;
   border-color:grey;
   
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
      	
      	float:left;
      	width: 15%;
      	height: 70px;
      	font-size: 20px;
      	font-style: oblique;
      	padding: 20px;
      	margin-left: 5%;
      	margin-top: 10%;
      	border-radius: 50px;
         border-style:ridge;
      	background:rgb(0,0,0,0.4);
         color:white;
      }
      #q{
         float:left;
         width: 20%;
      	height: 70px;
      	font-size: 20px;
         font-style: oblique;
      	padding: 20px;
      	margin-left: 14.5%;
      	margin-top: 17%;
      	border-radius: 50px;
         border-style:ridge;
      	background:rgb(0,0,0,0.4);
         color: white;
      	
      }
       #r{
      	float:right;
      	width: 20%;
      	height: 70px;
      	font-size: 20px;
      	font-style: oblique;
      	padding: 20px;
      	margin-left: 11%;
      	margin-top: 10%;
         border-style:ridge;
      	border-radius: 50px;
         background:rgb(0,0,0,0.4);
        color: white;
      }
       #p:hover {
         background-color: #ff0000;
       }  
       #q:hover {
         background-color: #ff0000;
       }
       #r:hover {
         background-color: #ff0000;
       }

      h1 {
         text-align: center;
         color: white;
      }

</style>
<body>
   <nav>
      <ul>
         <li>
            <a href="#">Dashboard</a>
         </li>
         <li>
            <a href="logout.php">Logout</a>
         </li>
      </ul>
</nav>
<h1><?php echo $_SESSION['Name']; ?></h1>
<a href="company details.php">
   <div id="p">
   <h3>Company Details</h3>
   </div>
   </a>
   <a href="webinarblank.php">
   <div id="q">
   <h3>Webinars</h3> 
   </div>
   </a>
<a href="usn.php">
   <div id="r">
   <h3>Placements</h3>  
</div>
</a>
</body>
</html>