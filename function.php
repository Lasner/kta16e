<?php


function aeg(){
    date_default_timezone_set("Europe/Tallinn"); //ajatsooni määramine
    $time = date("H:i:s");
    echo $time."<br>";
    if ($time > 17){
        echo "Aeg on koju minna<br>";
    } else{
        echo "Peab veel kannatama<br>";
    }
       
}

function home(){
    echo '<li><a href="index.php">Tagasi koju</a></li>';
}

function GetVisitorIp(){
    $ip = $_SERVER['REMOTE_ADDR']; //globaalne muutuja
    $time = date("H:i:s");
    $visitor = $ip." : ".$time."\n";
    $file = fopen('visitor.txt',"a") or die("Ei saanud avada");
    fwrite($file, $visitor);
        echo "Külastate seda saiti aadressilt: ".$ip;
    fclose($file);
}


?>