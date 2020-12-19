<html>
<HEAD>
<TITLE>Transaction</TITLE>
</HEAD>

<body>
<center>
<font color=green size="7">Transfer to PO account</font>
<br>
<br>
<font size=5>
<FORM Action="TransferNowCheck.php" method="get">
Post Office Code:
<INPUT TYPE="TEXT" Size=4 name="BCode" value="700"><br>
Transfer account:<br>
<INPUT TYPE="TEXT" size=10 readonly value="123456789"><br>
Transfer to account:<br>
<INPUT TYPE="TEXT" Size=10 name="Account"><br>
Transfer amount:<br>
<INPUT TYPE="TEXT" Size=10 name="Amount"><br>

<br>
<INPUT TYPE="submit" VALUE="Next">
</FORM>

<FORM Action= "Transaction.php" method="get">
<input type="submit" VALUE="Cancel" >
</FORM>
</font>
</center>
</body>
</html>