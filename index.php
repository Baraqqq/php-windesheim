<?php   
// Dump all info about the server
// var_dump($_SERVER['DOCUMENT_ROOT']);

// Comment what am i going to do here?
/* Hey guys 
* Here we will see all variables 
* String
* Float
* Integer -Big int
* Boolean
* _____
* Array
* Object

*/

// dit is een string
$string = "Hello guys"; //Ik geef nu aan dat $string Hello guys is
echo $string . " " . gettype($string) . "<br>"; //Nu geef ik aan dat ik op de scherm hello guys wil zien

// This is float
$float = 5.3; // Float kun je een getal met een punt invoeren. je kunt ook rekenen 
echo $float . " " . gettype($float) . "<br>";

$int = 60; // Integer zijn hele getallen. je kunt ook rekenen
echo $int . " " . gettype($int) . "<br>";

$adult = false; 
if ( $adult > 18 ) { // Boolean is een waar of niet waar
    echo "Je bent minderjarig";
 } else { 
    echo "Je bent meerderjarig" . " " . gettype($adult) . "<br>"; // Boolean is een waar of niet waar
}

$bignumber = PHP_INT_MAX; // Big int is een getal die heel groot is
echo $bignumber . " " . gettype($bignumber) . "<br>";

$ages = [10, 15, 18, 20]; // Array is een lijst van dingen

foreach ($ages as $age) {
    echo $age . "<br>";
}

$merken = ["Apple", "Samsung", "Huawei", "Xiaomi"]; // Array is een lijst van dingen
//print_r($merken[2] . "<br>"); // Print_r is een functie die de array laat zien
$autos = ["BMW", "Audi", "Mercedes", "Volkswagen"];

echo "<br><strong>For loop</strong><br>";

for ($i = 0; $i < count($autos); $i++) {
    echo $autos[$i] . "<br>";
}


echo "<br><strong>While loop</strong><br>";
//$i = count($merken); //
$i = 0;
while ($i < count($merken)) {
    echo $merken[$i] . "<br>";
    $i++;
}


echo "<br><strong>Do While loop</strong><br>";

$i = 0;
do{
    echo "Do... While loop, iteratie: $i<br>";
    $i++;
} while ($i < 4);


echo "<br><strong>For each loop</strong><br>";

$array = ["een", "twee", "drie"];
foreach ($array as $value) {
    echo "For each loop, waarde: $value<br>";
}

echo "<br><strong>Sterren for loop</strong><br>";

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

$hobbies = ["Lezen", "Schrijven", "Reizen", "Sporten"];

echo "<br><strong>Hobbies</strong><br>";

foreach ($hobbies as $hobbie) {
    echo "Hobbies: $hobbie<br>";
}

echo "<br><strong>Vermenigvuldiging</strong><br>"; 

for ($i = 1; $i <=10; $i++) {
    $result = 5 * $i;
    echo "5 x $i = $result<br>";
}