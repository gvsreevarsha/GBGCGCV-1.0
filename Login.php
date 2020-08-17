
<!-----HTML ------->
<html>
 <head>
     <title> Login Page</title>
     <link rel="stylesheet" type="text/css" href="UserCSS/userstyle.css">
 </head>
<body>
<div class="login-box">
    <img src="UserImages/avatar.png" class="avatar"><br>
    <h1>Login Here</h1>
    <form action="validate.php" method="post">
        <label>Username </label>
        <input type="text" name="usn" placeholder="Enter Username"><br>
        <label>Password </label>
        <input type="password" name="pass" placeholder="Enter Password">
        <input type="submit" name="submit" value="Login">
        <br>
        <a  href="#">Forget Password</a>
    </form>
</div>

<!--<form align="center"method="post" action="">
    <h3>User ID:  <input  style="padding-left:;font-size:20px;" type="text" name="userid" id="userid" placeholder="userid"/></h3>
    <h3>Password: <input style="font-size:20px;" type="password" name="password" id="password"/></h3>

</form>-->
<!--        <label>Username &nbsp &nbsp <input type="text" name="usn" placeholder="Enter Username"></label>
<label>Password &nbsp &nbsp<input type="password" name="pass" placeholder="Enter Password"></label>&nbsp &nbsp &nbsp

<input type="submit" name="submit" value="Login">
<br>
<br>
<a  href="#">Forget Password</a>-->
<!--.login-box label{
    margin: 5px 10px 5px 0;
}-->
<!--../Images/loginbg.jpeg-->
</body>
</html>
