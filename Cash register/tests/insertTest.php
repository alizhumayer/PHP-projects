<?php
include '../src/includes/db.php';

$tomb = array(
    'penz' => '20000',
    'leiras' => "kölcsön vissza"
);
        
        $conn = connectDb();
        var_dump(insertItem($conn, $tomb));

closeDb($conn);


