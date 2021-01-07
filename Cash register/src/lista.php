<?php
include 'includes/db.php';

echo file_get_contents('templates/head.tpl');
echo file_get_contents('templates/menu.tpl');

$conn = connectDb;
$penzek = getItems($conn);
closeDb($conn);

$tableRows = "";
foreach($penzek as list($az, $penz, $leiras, $datum )) {
    $tableRow = file_get_contents('templates/tableRow.tpl');
    $tableRow = str_replace('( az )', $az, $tableRow);
    $tableRow = str_replace('( penz )', $penz, $tableRow);
    $tableRow = str_replace('( leiras )', $leiras, $tableRow);
    $tableRow = str_replace('( datum )', $datum, $tableRow);
    $tableRows .= $tableRow;
   
}

$page = file_get_contents('templates/lista.tpl');
$page = str_replace('{ tableRows }', $tableRows, $page);
echo $page;

echo file_get_contents('templates/lista.tpl');
echo file_get_contents('templates/foot.tpl');

