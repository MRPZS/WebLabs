<?php
if  (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
  header('Location: /')
  exit()
}
