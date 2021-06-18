<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="sp">
    <input type="text" name="mo">
    <button name="them">them </button>

</form>
</body>
</html>
<?php
include_once 'List1.php';
include_once 'SanPham.php';
if (isset($_REQUEST['them'])){
    $ip=$_REQUEST['sp'];
    $ip1=$_REQUEST['mo'];
        $user=new SanPham($ip,$ip1);
       List1::addUser1($user);
}