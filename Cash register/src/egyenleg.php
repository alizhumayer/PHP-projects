<?php
include 'includes/db.php';

echo file_get_contents('templates/head.tpl');
echo file_get_contents('templates/menu.tpl');

$conn = connectDb();
$egyenleg = getBalance($conn);
closeDb($conn);

$page = file_get_contents('templates/egyenleg.tpl');
$page = str_replace('{ egyenleg }', $egyenleg, $page);
echo $page;

echo file_get_contents('templates/foot.tpl');
