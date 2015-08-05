<?php

if (isset($_POST'[form2'])){

$report = mysql_query("INSERT INTO `webpage` .`page`(`username`,`email`,`number`) VALUES('$_POST[username]','$_POST[email]','$_POST[number]')");

}




?>



<!DOCTYPE html>
<html>
<head>

<title>
serious
</title>
<link href="page.css" rel="stylesheet" type="text/css"/>

<link href="web.css" rel="stylesheet" type="text/css"/>



<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>



</head>
<body>
<div class="page">

<div id="nav">
	<ul>
		<li><a href="#">About Us</a></li>
		
		<li><a href="web page.html">Home</a></li>
		
		<li><a href="#">Buy $ Sell</a></li>
		<li><a href="#">Login</a></li><li><a href="contact.html">Contact</a></li>
		<li><a href="#">Our Products</a></li>
	</ul>
</div>
<div class="page2">
<img src="lol.jpg" width="1200px" height="500px">
</div>



<div class="page3">

<img src="loc.jpg" width="600px" height="400px">
</div>


<div class="page4">


</div>

 <div class="h2">Contact us</h2>
 <br>
<div class="page5">

  <form action="" method="post" >
   

   <label for="username">Username:</label><div class="uff">
      <input type="username" class="form-control" name="username" placeholder="Enter name">
</div>
   <br/>
      <label for="email">Email :</label><div class="uff">
      <input type="email" class="form-control" name="email" placeholder="Enter email">   </div>
   <br/>
   
         
    
  
  <label for="number">Your Contact Number:</label><div class="uff">
      <input type="number" class="form-control" name="number" height="200px" placeholder="number">  </div>  
	 <div class="uff5"> 
 <input type="submit" name="form2"  value="SEND"></div>
  </form>
  <div class="uff4">
  <table>
 
<td><a href="show.php">
<button>Check all info</button></td></a>
</tr>
</table></div>
<div class="uff2">
<address>
Written by Saheda Reza Antora.<br> 
Visit us at:<br>
Example.com<br>
Box 564, Disneyland<br>
USA
</address>
</div>

</div>

</div>








</html>