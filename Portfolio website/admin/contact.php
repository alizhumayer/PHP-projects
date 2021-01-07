<?php

require("../shared/inc/functions.inc.php");
require("../shared/inc/db.inc.php");

$stmt = $pdo->prepare("SELECT * FROM `messages`");
$stmt->execute();
$messages = $stmt->fetchAll();

ob_start();
require("./views/contact.view.php");
$content = ob_get_contents();
ob_end_clean();

require("./layouts/layout.php");

?>