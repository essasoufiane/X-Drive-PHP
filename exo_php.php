<?php
$classMars = [
    ["name" => "Florian" , "lunettes" => false , "genre" => "homme"],
    ["name" => "Emmanuel" , "lunettes" => true , "genre" => "homme"],
    ["name" => "Hakim" , "lunettes" => false , "genre" => "homme"],
    ["name" => "Tristan" , "lunettes" => false , "genre" => "homme"],
    ["name" => "Anis" , "lunettes" => false , "genre" => "homme"],
    ["name" => "Laurent" , "lunettes" => false , "genre" => "homme"],
    ["name" => "Anthony" , "lunettes" => true , "genre" => "homme"],
    ["name" => "Nathan" , "lunettes" => false , "genre" => "homme"],
    ["name" => "Kevin" , "lunettes" => false , "genre" => "homme"],
    ["name" => "William" , "lunettes" => false , "genre" => "homme"],
    ["name" => "Daouda" , "lunettes" => false , "genre" => "homme"],
    ["name" => "Hajara" , "lunettes" => false , "genre" => "femme"],
    ["name" => "Soufiane" , "lunettes" => false , "genre" => "homme"],
    ["name" => "Christopher" , "lunettes" => true , "genre" => "homme"],
    ["name" => "karima" , "lunettes" => true , "genre" => "femme"],
    ["name" => "natasha" , "lunettes" => true , "genre" => "femme"],
];

// trie tableau lunettes
$lunette=0;
$nonLunette=0;
foreach ($classMars as $class) {
if ($class["lunettes"]==true) {
echo $class["name"].'<br> ';
$lunette++;
}
if ($class["lunettes"]==false) {
$nonLunette++;
}
}
echo "$lunette personne(s) ont des lunettes <br>";
echo "$nonLunette personne(s) ont  pas des lunettes <br>";

echo "<hr>";

// trie tableau genres
$homme=0;
$femme=0;
foreach ($classMars as $class) {
if ($class["genre"]=="homme") {
echo $class["name"].'<br> ';
$homme++;
}
if ($class["genre"]=="femme") {
    
$femme++;
}
}
echo "$homme Hommes <br>";
echo "$femme Femmes <br>";

echo "<hr>";
?>

<!-- formualaire de recherche -->

<form method="post">
Nom : <input type="file" name="nom" size="12"><br>
Prénom : <input type="text" name="prenom" size="12">
<input type="submit" value="OK">
</form>

<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
print("<center>Bonjour $prenom $nom</center>");
?>
<?php

$tabs= [11,5,8,9,22,20,19,77,85,87,6];

$reponse = [];


foreach ($tabs as $number) {
   

    if($number >= 20){
        echo "  - ".  $number;
        $reponse[] = $number;
     
    }

}
echo '<br>';
echo implode(", " , $reponse) . " il y a " . count($reponse) . " chiffre(s) au dessus de 20";

// var_dump($reponse);

// ----------------------test---------------------

// $rand_keys = array_rand($classMars, 2);
// echo $classMars[$rand_keys[0]] . "\n";
// echo $classMars[$rand_keys[1]] . "\n";

// foreach($classMars as $key => $value){
// echo $key. "<br>";
// if(is_array($value)){
// foreach($value as $key => $value){
//     echo $key." : ".$value."<br>";
// }
// }
// echo "<br>";
// }


// echo $classMars[1]["lunettes"];

// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
// }

// function twodshuffle($classMars)
// {
//     // Get array length
//     $count = count($classMars);
//     // Create a range of indicies
//     $indi = range(0,$count-1);
//     // Randomize indicies array
//     shuffle($indi);
//     // Initialize new array
//     $newarray = array($count);
//     // Holds current index
//     $i = 0;
//     // Shuffle multidimensional array
//     foreach ($indi as $index)
//     {
//         $newarray[$i] = $classMars[$index];
//         $i++;
//     }
//     return $newarray;
// }

// var_dump($classMars) ;

