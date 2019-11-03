<html>
<head>
<title>Uploading image</title>
</head>
<body>
<form name="f1" action="7b.php" method="post" enctype="multipart/form-data">
<label> select image </label>
<input type="file" name="i1"/>
<br>
<input type="submit" name="b1" value="insert"/>
</form>
</body>
</html>
<?php
if(isset($_POST['b1']))
{
$con=mysqli_connect("localhost","root","","db1");
$image=mysqli_real_escape_string($con,file_get_contents($_FILES['i1']['tmp_name']));
$image_name=mysqli_real_escape_string($con,$_FILES['i1']['name']);
$id=11;
$q1="insert into imgtab values($id,'{$image}','{$image_name}')";
$res=mysqli_query($con,$q1);
if($res)
echo "success in uploading image file !";
else
echo "error : only image files are allowed ! ";
mysqli_close($con);
}
?>

