<!DOCTYPE html>


<html>


    <head>
        <title> delete student</title>
    </head>
    
    <style>
    
        *{margin: 0; padding: 0;}
        body{
             background-image: url("2.jpg");
             background-size: cover;
             background-attachment: fixed;
             height: auto;
            }
        
        .company{ background:rgb(0,0,0,0.8);
             background-color:none; width: 320px; padding: 40px 20px; box-sizing: border-box; position: fixed;; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        
        nav{
         width: 100%;
         height: 80px;
         background-color: navy;
         line-height: 50px;
         border-radius: 15px;
      }
      nav ul{
         float: right;
         margin-right: 30px;
      }
      nav ul li{
         list-style-type: none;
         display: inline-block;
      }
      nav ul li a{
         text-decoration: none;
         color: white;
         padding: 45px;
         font-size: 25px;
      }
        input{width: 100%; background:none; border: 1px solid #f0eded; outline:none; border-radius: 27px; padding: 10px 20px; box-sizing:border-box; margin-bottom: 20px; font-size: 16px; color:rgb(252, 255, 96);}
        input[type="button"]{ background:lightgreen;border:0; cursor:pointer; outline:none; color:black;}
        input[type="button"]:hover{ background: #e8eb5b; transition: .6s;}
        
        ::placeholder{color:white;}
    
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
        <div class="company">
        
            <form>
            
                <input type="text" placeholder="ENTER THE YEAR">
                <input type="button" value="Submit">
            
            </form>
        
        </div>
    
    
    
    </body>



</html>