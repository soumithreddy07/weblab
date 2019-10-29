<?php?>
<!doctype HTML>
<html>
    <head>
        <title>Reset Password</title>
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
         <h1 style="color:white;font-size:4rem;font-weight: 500;">RESET PASSWORD</h1>
        <form action="resetpass.php" method="post">
            <input type="text" name="username" placeholder="Username" required autofocus>
            <input type="text" name="phno" placeholder="Phone Number" required pattern="[0-9]{10}">
            <input type="password" name="password" placeholder="New Password" required>
            <input type="submit" value="Reset">
        </form>
        </div>
    
    </body>
</html>