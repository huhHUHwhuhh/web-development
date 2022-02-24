<?php
  
  $Res = 0;
  $Password = $_GET["text"];
  $Length = (strlen($_GET["text"]));
  $Res += 4*$Length;
  echo $Res;

  $digits = preg_match_all("/[0-9]/", $Password);
  $Res += 4*$digits;
  echo $Res;

  $UpperReg = preg_match_all("/[QWERTYUIOPASDFGHJKLZXCVBNM]/", $Password);
  if ($UpperReg !== 0){
    $Res +=(2*($Length-$UpperReg));
    echo $Res;
  }
  $LowerReg = preg_match_all("/[qwertyuiopasdfghjklzxcvbnm]/", $Password);
  if ($LowerReg !== 0){
    $Res +=(2*($Length-$LowerReg));
    echo $Res;
  }

  if ($digits == 0) {
    $res -= $Length;
    echo $Res;
  }
  
  if ($digits == $Length) {
    $res -= $Length;
    echo $Res;
  }
  

  $matches = count_chars($Password, 0); 

  for($i=0; $i < count($matches); $i++){
    if ($matches[$i] != 0)
      echo "\"", chr($i), "\" встречается в строке $matches[$i] раз(a).\n <br/>";
    if (($matches[$i] - 1) > 0)
      $Count += $matches[$i];

    }
   
    for($i=0; $i < count($matches); $i++){
        if ($matches[$i] != 0)
        if (($matches[$i] - 1) > 0){
            $Res -= $Count*($matches[$i]- 1); 
            echo $Res;
          }
        }
    
  

  echo "<br/>  Digits = " ;
  echo $digits;
  echo "<br/>  Length = ";
  echo $Length;
  echo "<br/>  UpperReg = ";
  echo $UpperReg;
  echo "<br/>  LowerReg = ";
  echo $LowerReg;

  echo "<br/>  Count = ";
  echo $Count;

  echo "<br/>  Res = ";
  echo $Res;
  $alphabet = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
  'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S',
  'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
  'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
  't', 'u', 'v', 'w', 'x', 'y', 'z', 'p', 'q', 'r', 's',
  '1', '2', '3', '4', '5', '6', '7', '8', '9', '0');