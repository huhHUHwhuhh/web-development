<?php
  
  $email = $_GET["email"];
  $first_name = $_GET["first_name"];
  $last_name = $_GET["last_name"];  
  $age = $_GET["age"];
  
  $file = fopen("file.txt", "r+");
  rewind($file);
  
  if (!empty($email)){
  fputs($file, "Email: ");
  fputs($file, $email);
  fwrite($file, $_POST['info'] . PHP_EOL);
  }
  else{ 
    fgets($file, 4096);
  }


  if (!empty($first_name)){
  fputs($file, "First Name: ");
  fputs($file, $first_name);
  fwrite($file, $_POST['info'] . PHP_EOL);
  }
  else{ 
    fgets($file, 4096);
  }


  if (!empty($last_name)){
  fputs($file, "Last Name: ");
  fputs($file, $last_name);
  fwrite($file, $_POST['info'] . PHP_EOL);
  } 
  else{
    fgets($file, 4096);
  }
  

  if (!empty($age)){
  fputs($file, "Age: ");
  fputs($file, $age);
  fwrite($file, $_POST['info'] . PHP_EOL);
  }
  else{ 
    fgets($file, 4096);
  }
 
  fclose($file);
  readfile("file.txt");