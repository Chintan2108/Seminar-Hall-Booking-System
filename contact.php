<!DOCTYPE html>
<html>
<head>
	<title>Mailer</title>
</head>
<body>
<form name="mailer" method="post" action="sendmail.php">
	<!--<p><center><strong>Enter Sender Email</strong></center>
	<input type="emailid" name="semail"></p>-->

	<p><center><strong>Enter Receiver Email</strong></center>
	<input type="emailid" name="remail"></p>

	<p><center><strong>Enter Subject</strong></center>
	<input type="text" name="subject"></p>

	<p><center><strong>Enter Messege</strong></center>
	<textarea type="text" name="messege"></textarea></p>

	<input type="submit" name="Submit" value="Send">

</form>
</body>
</html>