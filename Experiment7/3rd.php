<?php
session_start();
$fname=$_POST['i1'];
$lname=$_POST['i2'];
$add=$_POST['i3'];
if(isset($_POST['i3'])){
  $add1=$_POST['i3'];
}
else{
  $add1="";
}
if(isset($_POST['i4'])){
  $add1=$_POST['i4'];
}
else{
  $add1="";
}
$state=$_POST['i6'];
$city=$_POST['i5'];
$zip=$_POST['i7'];
$phno=$_POST['i8'];
$email=$_POST['i9'];
$ship=$_POST['ship'];
if (count($_SESSION['cloths'])===2){
  $cost=$_SESSION['qa']*(599+1299);
}
else if($_SESSION['cloths']==='T-shirt'){
  $cost=$_SESSION['qa']*599;
  $clo="T-Shirt";
}
else if($_SESSION['cloths']==='Hoodie'){
 $cost=$_SESSION['qa']*1299;
 $clo="Hoodie";
}
else{
    $cost=$_SESSION['qa']*1299;
 $clo=$_SESSION['cloths'];
}
if($ship==="50"){
 $ss="Standard (Rs.50)";
}
else{
 $ss="Express (Rs.200)";
}
$fcost=$cost+$ship;
if(count($_SESSION['cloths'])==0){
 $fcost=0;
}
?>
<html>
    <head>
        <title>order summary</title>
        <style>
            #os{
                background-color: red;
            }
            
        </style>
            
    </head>
    <body>
        <div id="os"><center><h1>Order Summery</h1> </center></div>
        Please take a moment to review your order.
        <p><strong>Name:</strong> <?php echo $fname." ".$lname;?></p>
  <p><strong>Address:</strong> <?php echo $add;?></p>
  <p><strong>State:</strong> <?php echo $state;?></p>
  <p><strong>City:</strong> <?php echo $city;?></p>
  <p><strong>Zip Code:</strong> <?php echo $zip;?></p>
  <p><strong>Phone Number:</strong> <?php echo $phno;?></p>
  <p><strong>Email:</strong> <?php echo $email;?></p><br><br>
  <table width='100%' cellspacing='0'>
   <tr bgcolor='#010101' style='color:white;border-radius:10px;'>
    <td align='center'><p><strong>Item</strong></p></td>
    <td align='center'><p><strong>Item Description</strong></p></td>
    <td align='center'><p><strong>Quantity</strong></p></td>
    <td align='center'><p><strong>Amount</strong></p></td>
   </tr>
   <tr>
    <td align='center'><p><?php echo $_SESSION['d1'];?></p></td>
    <td align='center'><p><?php echo $clo;?></p></td>
    <td align='center'><p><?php echo $_SESSION['qa'];?></p></td>
    
    <td align='center'><p><?php echo "Rs.".$cost;?></p></td>
   </tr>
   <tr>
    <td align='center'><p>Shipping</p></td>
    <td align='center'><p><?php echo $ss;?></p></td>
    <td> </td>
    <td align='center'><p><?php echo "Rs.".$ship;?></p></td>
   </tr>
   <tr>
    <td  style='border-bottom:none;' align='center'><p style="font-size:1.8rem;"><strong>Total</strong></p></td>
    <td style='border-bottom:none;'> </td>
    <td style='border-bottom:none;'> </td>
    <td style='border-bottom:none;' align='center'><p style="font-size:1.8rem;"><strong><?php echo "Rs.".$fcost;?></strong></p> </td>
  </table><br><br>
  <form action='success.php' method='post'>
   <center><input type='submit' value='Confirm'></center>
  </form>
    </body>
</html>