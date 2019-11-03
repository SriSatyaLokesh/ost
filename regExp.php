<?php
include('3a2.php');
?>
<center>
<form name="f1" action="" method="POST">
<b>enter username : </b>
<input type="text" name="un" value="<?php echo $valid_un; ?>" />
<br>
<?php echo $error_un; ?>
<br>
<b>enter email : </b>
<input type="text" name="e" value="<?php echo $valid_email; ?>" />
<br>
<?php echo $error_email; ?>
<br>
<b>enter password : </b>
<input type="text" name="p" value="<?php echo $valid_pass; ?>" />
<br>
<?php echo $error_pass; ?>
<br>
<b> select Gender : </b>
<select name="gender">
<option value="0"> select gender </option>
<option value="1"> male </option>
<option value="2"> female </option>
</select>
<br>
<?php echo $error_gender; ?>
<br>
<input type="submit" name="b1"/>
</form>
</center>
<?php
$name="";
$pass="";
$email="";
$gender="";
$error_un="";
$error_email="";
$error_pass="";
$error_gender="";
$valid_un="";
$valid_email="";
$valid_pass="";
$valid_gender="";
if($_POST)
{
$name=$_POST['un'];
$email=$_POST['e'];
$pass=$_POST['p'];
$gen=$_POST['gender'];
if(preg_match('/^[A-Za-z0-9]{3,20}$/',$name))
{$valid_un=$name;
}
else
$error_un="Enter valid name !";
if(preg_match('/^[A-Za-z0-9._-]+@[A-Za-z0-9._-]+\.[A-Za-z0-9]{2,4}$/',$email))
$valid_email=$email;
else
$error_email="Enter valid email";
if(preg_match('/^[A-Za-z0-9@#$%&^*()_]{6,20}$/',$pass))
$valid_pass=$pass;
else
$error_pass="Give correct password";
if($gen==0)
$error_gender="select gender !";
else
$valid_gender=$gen;
if(strlen($valid_pass)>0 && strlen($valid_un)>0 && strlen($valid_gender)>0 &&
strlen($valid_email)>0)
{
echo "<script>alert('Thank You for submitting !');
window.href.location='3a1.php' ;
</script>";
}
}
?>
