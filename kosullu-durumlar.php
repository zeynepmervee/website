<?php
$username = "Sadik Turan";
$db_password = "1234";

$sonuc = ($username == "Sadik Turan");

if($sonuc and $db_password=="1234"){
echo "username and password are right";
}else{
    echo "username or password are wrong";
}
?>