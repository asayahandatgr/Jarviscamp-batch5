<?php 
echo "<h3>Ganjil</h3>";
function ganjil($angka, $angka1){
    for ($i = $angka; $i < $angka1; $i++){
        if ($i % 2 == 1){
            echo " angka $i<br>";
        }
    }
}

ganjil(1, 10);

echo "<br>";

echo "<h3>Genap</h3>";
function genap($angka3, $angka4){
    for ($i = $angka3; $i < $angka4; $i++){
        if ($i % 2 == 0){
            echo " angka $i<br>";
        }
    }
}

genap(2, 11);
?>
