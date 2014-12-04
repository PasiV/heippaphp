<?php
date_default_timezone_set('Europe/Helsinki');
$x = 1;
 
while($x <= 100) {
   echo "The number is: $x " . chr(9);

   echo date('h:i:s') . chr(10);

   //sleep for 5 seconds
   sleep(5);

   $x++;
}
?>  
