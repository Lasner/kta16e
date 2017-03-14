<meta charset = "utf-8">



<script src="script.js"></script>
    

<?php
echo "<div></div>";
require 'components.php';
require 'function.php';
// Tagasi koju link
home();
menu($menu_begin, $menu_arr, $menu_end);
/*
Näitab praegust aega
ja annab soovitusi
*/
aeg();


//näiteid teksti kuvamise kohta
$name = "Lauri";
echo "<b>$name minu esimene PHP's kirjutatud lause!</b><br>";
echo "Nüüd vaatame täpitähti"."<br>";


GetVisitorIp();
counter();



?>