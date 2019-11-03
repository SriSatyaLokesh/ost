<?php
$zip=new ZipArchive();
if($zip->open('list_new.zip',ZipArchive::CREATE)==true)
{
$zip->addFile("4a.php");
$zip->addFile("4b.php");
$zip->close();
echo "successfully created and added files";
}
else
echo "problem in creating zip !";
?>
