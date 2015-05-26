

<?php

include('configure.php');

?>


<?php

if (isset($_POST['form1']))
{
    try
    {
    if (empty($_POST['name']))
    {
     throw new Exception ('You should entry your name,otherwise it can not connect');
     }
 
   $report= mysql_query("INSERT INTO `In.php`(`username`,`email`,`password`,`number`)
   VALUES('$_POST[username]','$_POST[email]','$_POST[password]','$_POST[number]')");
   echo "pre";
   print_r($report);
   $success_massage('It done successfully');
 
 
 }



catch(Exception $e)
{
$error_massage=$e->getMessage();

}


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
 <link href="css/bootstrap.min.css" rel="stylesheet"/>
  
 <link href="sty.css" rel="stylesheet" type="text/css"/> 
</head>
<body>

<div class="container"><nav>
	 
	<div class="navbar-header">
	<a class="navbar-brand" href="In.html">Sign In/ Register</a>
	</div>
	<div class="fulfil">
	<ul class="nav navbar-nav">
	<li><a href="Index1.html">Home</a>
    <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
    </div>
 
</nav>
   
 </div><div class="main"><img src="car1.jpg" height="300px" width="1100px"/></div><div class="mail">
<div class="jumbotron">

  <h3>Please Register</h3>
  <h5>
 You must fill up thhis form and send me.We will respons you withhin 24 hours</h5></div>
 
 
 
 <?php
 if (isset($success_massage){
	 echo $success_massage;
	 
 }
 if (isset($error_massage){
	 echo $error_massage;
	 
 }
 
 
 
 
 ?>
  <form role="form">
 
   

   <label for="username">Username:</label>
      <input type="username" class="form-control" name="username" value="Enter name">

   <br/>
      <label for="email">Email :</label>
      <input type="email" class="form-control" name="email" value="Enter email">   
   <br/>
   
      <label for="pwd">Password :</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">   
    
  <br/>
  <label for="number">Phone number :</label>
      <input type="number" class="form-control" name="number" placeholder="Enter number">   
	  <br/>
      <label><input type="checkbox"> Remember me</label>
	  <br/>
 <input type="submit" name="form1" value="Click to Submit"><br/> <br/> <br/>
  </form>
 
</div>
</div>

<div class="page-footer1">
 <marque>Buy your chossable car in sesson because it take you discount. so click and buy</marque></div>
 </div>
</body>
</html>
