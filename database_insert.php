<html>
<head>

</head>
<body>
<form name="f1" method="post" action="6b.php"><b> enter Rno : </b>
<input type="text" name="r"/>
<br>
<b> enter name : </b>
<input type="text" name="n"/>
<br>
<b> enter branch : </b>
<input type="text" name="b"/>
<br>
<b> enter age : </b>
<input type="number" name="a"/>
<br>
<b> enter email : </b>
<input type="text" name="e"/>
<br>
<b> enter phone : </b>
<input type="number" name="p"/>
<br>
<input type="submit" name="l1" value="insert"/>
</form>
</body>
</html>
<?php
if(isset($_POST['l1']))
{
$r=$_POST['r'];
$n=$_POST['n'];
$b=$_POST['b'];
$a=$_POST['a'];
$e=$_POST['e'];
$p=$_POST['p'];
$con=mysqli_connect("localhost","root","","test");
$q1="insert into form values('$r','$n','$b',$a,'$e',$p)";
$res=mysqli_query($con,$q1);
if($res)
echo "successfully inserted !";
else
echo "insertion failed";
mysqli_close($con);
}
?>
