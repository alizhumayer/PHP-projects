<?php
include 'includes/db.php';

echo file_get_contents('templates/head.tpl');
echo file_get_contents('templates/menu.tpl');

$conn = connectDb();

if(insertItem($conn, $_POST)) {
    $msg = "Sikeres felvétel";
}else {
    $msg = "Hiba! A felvétel sikertelen!";
}

closeDb($conn);

$page = file_get_contents('templates/felvesz.tpl');
$page = str_replace('{ msg }', $msg, $page);
echo $page;
