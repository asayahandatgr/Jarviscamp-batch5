<?php 
$fruit = [1,2,3,5];

$fruit[0] = "hijau";
$fruit[2] = "merah";
print_r($fruit);

echo"<br>";

echo count($fruit);
echo '<br>';

array_push($fruit, "mangga", "apple");
print_r($fruit);
echo '<br>';


var_dump(in_array("hijau", $fruit));
echo "<br";

$last = array_pop($fruit);
print_r($fruit);
echo "<br>";
echo $last

?>