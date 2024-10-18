<?php
if  (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
  header('Location: /')
  exit()
}

$category = $_POST['category'];
$title = $_POST['title'];
$email = $_POST['email'];
$desc = $_POST['description'];
