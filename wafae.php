<?php
if  (fopen("oneTime.txt", "r")){
die('You cannot read this message');
}
$message = "";

$myfile = fopen("oneTime.txt", "w") or die("Unable to open file!");
$txt = "1";
fwrite($myfile, $txt);

echo $message;

?>