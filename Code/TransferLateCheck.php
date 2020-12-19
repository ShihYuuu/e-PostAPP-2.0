<html>
<HEAD>
<TITLE>Transaction</TITLE>
</HEAD>

<body>
<center>
<font color=green size="6">Transaction confirmation
</font>
<br>
<br>
<font size=5>
 <?php 
	 echo $_GET["frequency"].'&nbsp'.$_GET["Date"].'<br>';
	 echo 'Code:'.$_GET["BCode"].'<br>';
	 echo 'Transfer'.'&nbsp&nbsp&nbsp&nbsp&nbsp'.'account:'.'123456789'.'<br>';
	 echo 'Transfer to account:'.$_GET["Account"].'<br>';
	 echo 'Transfer amount:'.$_GET["Amount"].'<br>';
 ?>
<br>
Input Authentication Code:<br>
<input type="text" size="10" name="AC">

<FORM Action= "End.php" method="get">
<input type="submit" VALUE="Send" >
</FORM>

<INPUT type ="button" onclick="history.back()" value="back">
</font>
</center>
</body>
</html>