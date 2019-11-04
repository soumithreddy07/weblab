<?php session_start(); if(isset($_SESSION['user'])){
    header('location:success.php');
}?>
<!doctype HTML>
<html>
    <head>
        <title>Register</title>
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
            
            
        </style>
    </head>
    <body>
        <div class="container">
        <h1 style="color:white;font-size:4rem;font-weight: 500;">Register</h1>
        <form action="register.php" method="post">
            <input class='c' type="text" name="username" placeholder="Username" required autofocus>
            <input type="text" name="phno" placeholder="Phone Number" required pattern="[0-9]{10}">
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Register">
        </form>
        <form action='login.php' method='post'>
            <span style='color:white;'>Already Registered?</span>
            <input type='submit' value='Login'>
            <a style='color:white;' href="people.php">View people who have already registered</a>
        </form>
        </div>
    
    </body>
</html>