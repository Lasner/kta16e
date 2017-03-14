<?php


function aeg(){
    date_default_timezone_set("Europe/Tallinn"); //ajatsooni määramine
    $time = date("H:i:s");
    echo $time."<br>";
    if ($time > "19:40"){
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
        echo "Külastate seda saiti aadressilt: ".$ip."<br>";
    fclose($file);
}

function counter() {
    $file_name = "count.txt";
    if (!file_exists($file_name)){
        $file = fopen($file_name,"w") or
        die("Can't open");
        $count = 1;
        fwrite($file, $count);
        echo "Õnnitleme, olete külastaja nr ".$count;
        fclose($file);
        
    } else {
        $file = fopen($file_name,'r+') or 
        die("Can't open");
        $count = file_get_contents($file_name)+1;
        fwrite($file, $count);
        echo "Olete külastaja nr ".$count;
        fclose($file);
        
    }
}


?>

















