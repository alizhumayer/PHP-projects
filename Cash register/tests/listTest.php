<?php
include '../src/includes/db.php';

        $conn = connectDb();
        var_dump(getItem($conn));

closeDb($conn);
