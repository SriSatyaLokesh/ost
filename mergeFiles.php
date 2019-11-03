<?php
$lines=file('f1.txt');
$lines2=file('f2.txt');
foreach ($lines as $key => $value) {
$lines[$key]=$value.$lines2[$key];
}
file_put_contents('f3.txt', implode("\n", $lines));
echo "operation done";
?>
