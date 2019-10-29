<?php session_start();?>
<!doctype HTML>
<html>
    <head>
        <title>Welcome</title>
        <style>
             body{
                background-color:black;
            }
            .container{
                
                
                text-align: center;
                height:70%;
                width:33%;
                
                
                padding:5% 1%;
                padding-top:0;
            }
            .container *{
                display:block;
                margin:7% auto;
            }
            .container input[type='text'],.container input[type='password']{
                text-align: center;
               
                
                padding:14px 10px;
                
                width:60%;
               
                
            }
            .c{
                margin-top:10%;
                  
            }
            input[type='submit']{
                
                width:30%;
                
                
               
            }
            s      </style>
    </head>
    <body>
        <div class='container'>
        <h1 style="color:white;font-size:10rem;font-weight: 500;">Welcome <?php echo $_SESSION['user'];?>.</h1>
        <form action='logout.php' method='post'>
            <center> <input type='submit' value='Logout'></center>
        </form>
        </div>
        <center class="cpy">&copy;Sushen Vallabh V - URK17CS231</center>
    </body>
</html>