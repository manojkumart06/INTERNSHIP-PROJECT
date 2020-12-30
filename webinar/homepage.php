
<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<style>
	body
	{background-image: url("img/home.jpg");

background-repeat:no-repeat;
background-size:cover;
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
h1
{
	color: #F5F7F9;
	font-size: 60px;
	margin-top: 13%;
	text-align: center;
	font-style:oblique;
	
}
</style>
<body>
	<div id="main">
		
		<nav>
			<ul>
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="admin login.php">Admin</a>
				</li>
				<li>
					<a href="user login.php">User</a>
				</li>
			</ul>
		</nav>
	</div>
	<h1>Webinar <br> Registration</h1>
</body>
</html>