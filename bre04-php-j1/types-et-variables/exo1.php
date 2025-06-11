<?php
   $nb = 42;
   echo "$nb <br>";
   
   $str = "La vie l'univers et tout le reste <br>";
   echo $str;
   
   $nbstr = "$nb : $str";
   echo $nbstr ."<br>";
   
   $nb_tab = [12, 34, 4.3, 3.2];
   print_r( $nb_tab);
   echo "<br>";
   
   $str_tab = ["bonjour", "tout", "le", "monde"];
   print_r($str_tab);
   echo "<br>";
   
   $animal = [
       "species" => "chat",
       "name" => "Curly",
       "age" => "10 ans",
      ];
     
     print_r($animal);
     echo "<br>";
   
   $data = 42.0;
   echo "$data <br>";
   
   $int = (int) $data;
   echo $int ."<br>";
   
   $str= (string) $int;
   echo $str;
   
?>