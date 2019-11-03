//Image Retrieving
<html>
<head>
</head>
<body>
<center>
<label> image </label>
<br>
<br>
<br>
<img src="getImage.php" style="width:100%,height:100%"/>
</center>
</body>
</html><?php
$link = mysqli_connect("localhost", "root", "","db1");
$sql = "SELECT img FROM imgtab where id=1";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);
header("Content-type: image/png");
echo $row['img'];
mysqli_close($link);
?>
