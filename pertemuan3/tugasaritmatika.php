<?php 
function aritmatika($angka1, $angka2, $operator) {
    if ($operator == '+') {
        return $angka1 + $angka2;
    } elseif ($operator == '-') {
        return $angka1 - $angka2;
    } elseif ($operator == '*') {
        return $angka1 * $angka2;
    } elseif ($operator == '/') {
        if ($angka2 == 0) {
            return "Error";
        }
        return $angka1 / $angka2;
    } else {
        return "Operator tidak valid.";
    }
}

echo "Tambah: " . aritmatika(10, 5, '+') . "<br>";
echo "Kurang: " . aritmatika(10, 5, '-') . "<br>";
echo "Kali: " . aritmatika(10, 5, '*') . "<br>";
echo "Bagi: " . aritmatika(10, 5, '/') . "<br>";
?>
