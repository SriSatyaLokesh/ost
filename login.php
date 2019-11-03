<html>
<head>
<title> 6a </title>
</head>
<body>
<form name="f1" method="post" action="6a.php">
<b> enter username : </b>
<input type="text" name="u1"/>
<br>
<b> enter password : </b>
<input type="password" name="p1"/>
<br>
<input type="submit" name="b1" value="login"/>
</form>
</body>
</html>
<?php
if(isset($_POST['b1']))
{
$u1=$_POST['u1'];
$p1=$_POST['p1'];
if($u1=="vissu")
{
if($p1=="12345")
{
echo "successful login !";
}
else
echo "wrong password ! ";
}
else
echo "no user exists by that name !";
}
?>
