<?php
require("../shared/inc/functions.inc.php");
require("../shared/inc/db.inc.php");

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM `messages` WHERE `id`=:id");
$stmt->bindParam(":id", $id);
$stmt->execute();
$message = $stmt->fetch();

// Keine Nachricht gefunden haben
if (empty($message)) {
  header("Location: contact.php");
  die();
}

if (!empty($_POST)) {

  $isValidForm = (
    isset($_POST['name']) && 
    isset($_POST['email']) && 
    isset($_POST['subject']) && 
    isset($_POST['timestamp_date']) && 
    isset($_POST['timestamp_time']) && 
    isset($_POST['message'])
  );

  if ($isValidForm) {

    $date = explode("-", $_POST['timestamp_date']);
    $time = explode(":", $_POST['timestamp_time']);


    $timestamp = mktime(
      $time[0], $time[1], $time[2],
      $date[1], $date[2], $date[0]
    );

    // Daten in DB schreiben
    $stmt = $pdo->prepare("UPDATE messages 
      SET 
        `name`=:name, 
        `email`=:email, 
        `subject`=:subject, 
        `message`=:message,
        `timestamp`=:timestamp
      WHERE `id`=:id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":subject", $_POST['subject']);
    $stmt->bindParam(":message", $_POST['message']);
    $stmt->bindParam(":timestamp", $timestamp);

    $stmt->execute();

    header("Location: contact.php");
    die();
  }
}



ob_start();
require("./views/contact-edit.view.php");
$content = ob_get_contents();
ob_end_clean();

require("./layouts/layout.php");

?>