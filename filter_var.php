<html>
<head>
<title></title>
</head>
<body>
<form name="f1" method="post" action="4b.php">
<b> enter ip : <b>
<input type="text" name="i"/>
<br>
<b> enter age : </b>
<input type="text" name="a"/>
<br>
<b> enter email : </b>
<input type="text" name="e"/>
<br>
<input type="submit" name="t"/>
<br>
<input type="reset"/>
</form>
</body>
</html>
<?php
if(isset($_POST['t']))
{
$i=$_POST['i'];
$a=$_POST['a'];
$e=$_POST['e'];
if(filter_var($i,FILTER_VALIDATE_IP)==true)
echo " valid ip address ";
else
echo " not a valid ip address ";
if(filter_var($a,FILTER_VALIDATE_INT)==true)
echo "valid age ";
else
echo "not valid age";
$email=filter_var($e,FILTER_SANITIZE_EMAIL);
if(filter_var($email,FILTER_VALIDATE_EMAIL)==true)
echo "valid email";
else
echo "invalid email";
}
?>
