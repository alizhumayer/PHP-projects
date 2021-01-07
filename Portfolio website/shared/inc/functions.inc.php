<?php

date_default_timezone_set("Europe/Berlin");

function e($text) {
  return htmlspecialchars($text, ENT_QUOTES, "UTF-8");
}