<?php 
$array = [1,2,3,4,5];

echo $array[1];
echo "<br><pre>";
print_r($array);
echo "</pre>";

$umur = ["Tegar" => 19, "Rahmat" => 20];
$umur =["Gare" => 21];
$umur =["Laila" => 20];

echo "<br><pre>";
print_r($umur);
echo "</pre>";

foreach ($umur as $key => $value)
echo "Namanya : $key <br> Umurnya : $value <br>";

// aray multidimensi


$buahan =[
    ["nama" => "Apel", "warna" => "Merah"],
    ["nama" => "Mangga", "warna" => "Oren"],
    ["nama" => "Anggur", "warna" => "Ungu"],
];
?>

<table border="2">
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php foreach ($buahan as $buah) {?> 
        <tr>
            <td><?= $buah['nama'] ?></td>
            <td><?= $buah['warna'] ?></td>
        </tr>
        <?php } ?>
</table>