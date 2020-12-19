<html>
<HEAD>
<TITLE>Login</TITLE>
</HEAD>
<body>
<center>
<br>
<font size=6>
 <?php if($_GET["Password"] == "123") { echo " Login Success"; } 
		else {echo "Your Password is wrong, please try again";}
 ?>
 </font>
 <br>
 <br>
 <INPUT type ="button" onclick="history.back()" value="back"></input>
 <br>
 <FORM Action= "interface.php" method="get">
 <br>
 <INPUT TYPE="submit" VALUE="next">
 
</FORM>
</center>
</body>
</html>