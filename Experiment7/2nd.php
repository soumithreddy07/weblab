<?php
session_start();
if(isset($_POST['cloths']))
{
    $_SESSION['cloths']=$_POST['cloths'];
    
}
else{
    $_SESSION['cloths']=0;
}
$_SESSION['d1']=$_POST['d1'];
$_SESSION['qa']=$_POST['qa'];
$_SESSION['si']=$_POST['si'];
$_SESSION['co']=$_POST['co'];
?>

<html>
    <head><title>Address page</title>
        <link href="7styles.css" rel="stylesheet" type="text/css">
        <style>
            #cloths{
    background-image: url("images.jpg");
    height:40%;
    width:100%;
}
#sh{
   background-image: url("tshirt.jpg");
   height:80%;
   width:40%;
   display:inline-block;
   
}
#hd{
 background-image: url("hoodie.jpg");
     height: 80%;
     width:40%;
     display:inline-block;
     
     
}
#clr{
    background-color: burlywood;
}
#en{
    background-color: brown;
}
#sho{
    background-color: lemonchiffon;
}
#con{
   background-color: brown;
}
        </style>
    </head>
    <body>
        <div id="en"><center><h1>Enter your shoping information</h1> </center></div>
        <form action="3rd.php" method="post">
            <div>
                <h1 style="display: inline-block">  First Name<font color="red" ><sup>*</sup> </font></h1>
            <input type="text" name="i1"  placeholder="Name" required>
            <h1 style="display: inline-block">  Last Name<font color="red" ><sup>*</sup></font> </h1>
              <input type="text" name="i2"  placeholder="Family Name" required>
            </div>
            <div>
                <h1>Street Address<font color="red" ><sup>*</sup></font> </h1>
             <input type="text" name="i3"  placeholder="My street" required>
             </div>
             <div>
                 <h1> Address Line 2<font color="red" ><sup>*</sup></font> </h1>
             <input type="text" name="i4"  placeholder="Address" required>
             </div>
            <div>
                 <h1 style="display: inline-block"> City<font color="red" ><sup>*</sup></font> </h1>
                 <input type="text" name="i5" value="city" placeholder="Coimbatore" required>
                  <h3 style="display:inline-block;">State<font color="red" ><sup>*</sup></font></h3>
                  <select name="i6" placeholder="Tamil Nadu" required>
                    <option>Tamil nadu</option>
                    <option>Telangana</option>
                    <option>Andra Pradesh</option>
                    <option>Kerala</option>
                    </select>
                  </div>
            
                  <div>
                 <h1>Zip Code<font color="red" ><sup>*</sup></font> </h1>
             <input type="number" name="i7" value="zip" placeholder="64114" required min="6">
             <h1>Phone Number<font color="red" ><sup>*</sup></font> </h1>
             <input type="number" name="i8" value="add" placeholder="1234567890"  required>
                  </div>
             <div>
                 <h1>Email Address<font color="red" ><sup>*</sup></font> </h1>
                 <input type="email" name="i9" value="mail" placeholder="name@gmail.com" required>
                 
             
             </div>
            <div id="sho">
             <h1>Shopping<font color="red" ><sup>*</sup></font> </h1>   
             <input type="radio" name="ship" value="200"> Express(Rs.200)<br>
             <input type="radio" name="ship" value='50'> Standard(Rs50)
                
            </div>
             <div id="con">
                 <center> <input type="submit" name="" value="CONTINUE>>"> </center>
            
        </div>

                
                 
             
            
            
            
        </form>
    </body>
</html>