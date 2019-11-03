<html>
<head>
<script>
function hint(str){
if(str.length==0)
{
document.getElementById("dis").innerHTML="";return;
}
else
{
var xml=new XMLHttpRequest();
xml.onreadystatechange=function(){
if(this.readyState==4 && this.status==200)
{
//console.log(this.responseText);
document.getElementById("dis").innerHTML=this.responseText;
}
};
xml.open("GET","6c.php?hint="+str,true);
xml.send();
}
}
</script>
</head>
<body>
<p><b>Start typing a name in the input field below:</b></p>
Usernames <input type="text" onkeyup="hint(this.value)">
<p>Suggestions: <span id="dis"></span></p>
</body>
</html>


<?php
$hint=$_GET["hint"];
$con=mysqli_connect("localhost","root","","db1");
$sql="select * from form where name like'".$hint."%'";
$res=mysqli_query($con,$sql);
$str="";
while($r=mysqli_fetch_array($res))
{
if($str=="")
$str=$r[1];
else
$str.=", $r[1]";
}
echo $str;
?>
