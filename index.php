<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php
     $player1 = "Martin Kokeš";
     $player2 = "BaBča";
     $player3 = "Adam";
     $player4 = "Jan Pilař";

     echo "hráč 1: $player1";
     echo "hráč 2: $player2";
     echo "hráč 3: $player3";
     echo "hráč 4: $player4";

     $players[] = "Martin Kokeš new";
     $players[] = "Jan Prokeš";
     $players[] = "Michal Šobek";
     $players[] = "Jan Klíma";

    for ($i=0; $i < count($players); $i++) {
    echo "hráč ". ($i+1) . ":" .  $players[$i] . "<br>";
} 
?>
 </body>
 </html>