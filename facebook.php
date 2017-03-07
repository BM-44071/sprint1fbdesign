<html lang="en">
 <head>
 <link rel="stylesheet"  type="text/css" href="outline.css">
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
 <div class="row">
 <div class="col-md-12">
 
 
 <div id="fb1">
 </div>
 <div id="fb2"></div>
 
 <div id="fb3" style="color:white"><h1>facebook</h1></div>
   <div id="fb9"><input type="button" value="LOGIN" style="position:relative;"></div> 
 <div id="fb4" style="color:darkblue"><h2>Facebook helps you connect and share with the people in your life.</h2>
 </div>
 <img src="map.jpg" style="width:304px;height:228px; margin-left:5cm">
  <input type="text" id="fb5">   
 <input type="password" id="fb6">  
  <h6 style="margin-left: 21.3cm;margin-top:-430px;border: 1px solid darkblue; width:3.5cm;height:0.5cm;color:white;">Email or phone</h6> 
 <h6 style="margin-left:26.6cm;border: 1px solid darkblue; margin-top: -30px; color:white;" >Password</h6> 

 <div id="fb10" style="margin-left:23cm; margin-top:70px;"><h1>create an account</h1></div>
 
 <div id="fb11" style="margin-left:23.1cm; "><h5>It's free and always will be.</h5></div>
 
  <input type="text" placeholder="First Name" size="27" id="fb12"> 
 
  <div id="fb13"><input type="text" placeholder="Surname" size="27"></div> 

 <div id="fb14"><input type="text" placeholder="Email or mobile number" size="61"></div>
 
 <div id="fb15"><input type="text" placeholder="Re-enter email or mobile number" size="61"></div>
 <div id="fb16"><input type="text" placeholder="New password" size="61"></div>

 <div id="fb17"><h3>Birthday</h3></div>
  
 
  <!-- <div id="fb19"><h5>&#9675 female</h5></div> -->
  <!-- <div id="fb20"><h5>&#9675 male</h5></div> -->
  
 <div id="fb22" style="margin-left: 15.8cm; margin-top: -6px;">
 <form name="myform">
 <table align="center">
 <tr><td></td>
 <td>
 <select name="date">
 <option>Day</option>
 <?php
 $a=1;
 while($a<=31)
 {
 	echo"<option>$a</option>";
 	$a++;
 
 }
 ?>
 </select>
 <select name="month">
 <option>Month</option>
 <?php
 $b=1;
 while($b<=12)
 {
 	echo"<option>$b</option>";
 	$b++;
 }
 ?>
 </select>
 <select name="year">
 <option>year</option>
 <?php
 $c=1880;
 while($c<=2025)
 {
 	echo"<option>$c</option>";
 	$c++;
 }
 ?>
 </select></td></tr></table></form>
  <div id="fb18"><h6>Why do I need to provide my <br>date of birth?</h6></div> 
  <input type="radio" name="gender" value="female" style="margin-left: 7.5cm;"> Female
  <input type="radio" name="gender" value="male" style="margin-left: 1cm;"> male
 <div id="fb21"><h6>By clicking create an account.You agree to our <span style="color:blue;">Terms</span> and that<br> you have read our<span style="color:blue;"> Data policy</span>including our cookie use.</h6></div>
 <div id="fb23" ><input type="submit" value="Create an account!" style="color:white; width:5cm; height:1.1cm;background-color:green; border-radius: 6px;">
 
 </div>
 <hr style="margin-left:7.2cm;height:1px;background-color:black; margin-top:50px; ">
 
 <div id="fb24"><h6><span style="color:blue;">Create a page</span> for a celebrity,band or business.</h6></div> 
 </div></div>
 </body></html>