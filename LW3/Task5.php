<?php
  
  $email = $_GET["email"];
  $first_name = $_GET["first_name"];
  $last_name = $_GET["last_name"];  
  $age = $_GET["age"];
  
  file_put_contents("file.txt", '');
  $file = fopen("file.txt", "r+");
  
  
  fputs($file, "Email: ");
  fputs($file, $email);
  fwrite($file, $_POST['info'] . PHP_EOL);
  
  fputs($file, "First Name: ");
  fputs($file, $first_name);
  fwrite($file, $_POST['info'] . PHP_EOL);
  
 
  fputs($file, "Last Name: ");
  fputs($file, $last_name);
  fwrite($file, $_POST['info'] . PHP_EOL);
 
  fputs($file, "Age: ");
  fputs($file, $age);
  fwrite($file, $_POST['info'] . PHP_EOL);
 
  fclose($file);
  readfile("file.txt");