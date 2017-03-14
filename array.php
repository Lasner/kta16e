<?php

require 'function.php';
home();

$month = "veebruar";
//näidismassiiv
$test = array('kolmapäev', 3.14, $month, 8, "Klass nr A210");

//massiivi sisu trükk
print_r($test);
echo "<br>";
//muutjua sisu näitamine
var_dump($test);
echo "<br>";
//massiivi üksiku elemendi näitamine
echo $test[0];
echo "<br>";
//massiivi liikme lisamine
$test[] = "uus massiivi liige";
    print_r($test);
    echo "<br>";

$test_a = array('esimene' => 'Tauno',
                'teine' => 'Ragnar',
                'kolmas' => 'Kevin');
print_r($test_a);
//esimese massiivi väljatrükk kultuursel kombel
for ($i=0; $i < count($test); $i++){
    echo "<li>".$test[$i]."</li><br>";
}
foreach($test_a as $jrk => $name){
    echo "<li>".$name." on järjekorras ".$jrk.".</li>";
}

//kahemõõtmeline massiiv
$esta = "Eesti keel";
$mata = "Matemaatika";
$fyss = "Füüsika";

$hinded = array(
            "Peeter" =>
                array($esta => 4, 
                     $mata => 4,
                     $fyss => 3),
            "Jüri" =>
                array($esta => 5, 
                     $mata => 3,
                     $fyss => 4),
            "Mari" =>
                array($esta => 3, 
                     $mata => 2,
                     $fyss => 2),
            "Pille" =>
                array($esta => 4, 
                     $mata => 5,
                     $fyss => 2)
);
echo $hinded['Peeter'][$esta]."<br>";
//massiivi (kõige kõrgema) võtmed
print_r(array_keys($hinded));
echo "<br>";
//massiivi (kõige kõrgema) väärtused
print_r(array_values($hinded));
echo "<br>";

//kahemõõtmelise massiivi kultuurne väljatrükk
$hinded_id = array_keys($hinded);

for($i=0; $i < count($hinded_id); $i++){
    echo $hinded_id[$i]."<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne){
        echo $aine." : ".$hinne."<br>";
    }
}













































?>