<?php 
$ip = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
$lastlogin = file_get_contents('lastlogin.encrypt');
if($ip == $lastlogin){
    file_put_contents("lastlogin.encrypt","CLeared");
$loc = "./index.php";
}
else{
    $loc = './login.php';
}
header("Location: $loc");
?>


