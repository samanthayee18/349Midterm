<!DOCTYPE html>
<html>
    <body>
        <h1>MidTerm fill-in php&html</h1>

<?php

$row = mysqli_fetch_object($result);

$db_userid = $row->admin_id;
$db_password = $row→admin_password;
$encryptpasswd = sha1($userPasswd); // Note: sha1 encryption is obsolete
$db_name = $row->admin_name;

$sql = "INSERT INTO table (adminId, password, name) VALUES ('1', '123', 'Sam' )";

if ($db_userid != $userid || $db_password != $encryptpasswd) {
    echo $row[0]. "-" .$row[1]. "-" .$row[2]. "-" .$row[3]. "<br />";
    echo "Successsful";

 if (!$result) {
 echo ("Insert to administrator failed. ". mysqli_error($connection));
 exit();
 }
}
?>