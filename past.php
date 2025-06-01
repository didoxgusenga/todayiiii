<!DOCTYPE html>
<html>
<head>
  <input type="submit">
  echo <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the POST request
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message