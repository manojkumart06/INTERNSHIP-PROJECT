<?php
include 'app/connect.php';
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Studentlogin.php");

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assests/login.css">
    
</head>
<style>

  body{

     background-image: url("pic1.jpg");
    background-repeat: no-repeat;
    background-size:cover;
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
table {
 border-collapse: collapse;
 width: 50%;
  border-radius: 10px;
}

td{
  padding: 8px;
  text-align: left;
  color: black;

}

 th {
  padding:8px;
  text-align: left;
  background-color:green;
  color: white;
}


tr:hover 
{
     background-color:magenta;
     
}

table.center {
  margin-left: auto; 
  margin-right: auto;
background-color:lightblue;

}

h3
{
  text-align: center;
  color: black;
  font-family: verdana;
  font-size: 20px;: 
  }
  #n1{
     color: white;
     font-family: verdana;
     font-size: 20px;
    }
    h1 {
         text-align: center;
         color: black;
      }


  </style>

<body>


  <div id="main">
    <nav>  
      <ul>
             
            <li><a href="student after login.php">Dashboard</a></li>
            <li><a href=logout1.php>Logout</a></li>
            </ul>
    </nav>
</div>
<h1><?php echo $_SESSION['Name']; ?></h1>
<hr>
<h3><u>Company Details</u></h3>
<hr>
   <table class="center">
   	<tr>
      <th>COMPANY ID</th>
   		<th>NAME</th>
   		<th>EMAIL</th>
   		<th>PHONE</th>
   		
   	</tr>
   	<?php 
      $sql = "SELECT * FROM company";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) {
        ?> 
        <tr>
        	<td> <?php echo $row['COMPANYID']; ?> </td>
        	<td> <?php echo $row['NAME']; ?> </td>
        	<td> <?php echo $row['EMAIL']; ?> </td>
        	<td> <?php echo $row['PHONE']; ?> </td>
        	
        </tr>  
        <?php     	
            }
     	?>  	
   </table>   


</body>
</html>