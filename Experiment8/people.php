<?php 
require_once "connect.php";
$q1='select username from members;';
$res=mysqli_query($conn,$q1);
$p="";
while($row=mysqli_fetch_array($res)){
    $p=$p."<tr><td>".$row['username']."</td></tr>";
}
?>
<html>
    <head>
        <title>People</title>
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
            
            table *{
               
                color:white;
            }
            table{
                border:2px solid white;
                margin: 0 auto;
            }
            th,td{
                border-bottom:2px solid white;
            }
        </style>
    </head>
    <body style='text-align: center;'>
        <div class='container'>
        <table width='100%'>
            <tr><th>Username</th></tr>
        <?php echo $p;?>
        </table>
        </div>
    </body>
</html>