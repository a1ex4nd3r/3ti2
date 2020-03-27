<?php

$imie=$_POST['imie'];
$wiek=$_POST['wiek'];
$gra=$_POST['gra'];
$gram_na=$_POST['gram_na'];
$jedzenie=$_POST['jedzenie'];

echo "Czesc ".$imie."<br>Lat: ".$wiek."<br>Grasz w: ".$gra."<br>na: ".$gram_na."<br>Twoje jedzenie: ";

if(!empty($_POST['jedzenie'])){
   foreach($_POST['jedzenie'] as $check) {
            echo $check;
    }
}

?>
