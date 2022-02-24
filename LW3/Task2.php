<?php
  $Ch = str_split($_GET["text"]);
  if (is_numeric($Ch[0]) == TRUE) {
    echo "no";
  }
  else {
      echo "yes";
  }
  