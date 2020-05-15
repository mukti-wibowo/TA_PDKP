<!DOCTYPE html> 
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<center><h1><font face="Francois One">Invalid Login</font></h1></center>
<?php
include("userService.php");	

$user = new userService($_POST['username'], $_POST['password']); 

if($get_user = $user->login()) 
{
    header("location:menu.php");
} 
else{
    
}
?>  
</body>
</html>