<?php
session_start();

if (!isset($_SESSION['initial_load']) || $_SESSION['initial_load'] === false) {
    unset($_SESSION['products']);
    $_SESSION['initial_load'] = true;
}

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
        ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
        ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
        ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
        ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
    ];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $newProduct = [
        "barang" => $barang,
        "Harga" => $harga,
        "Deskripsi" => $deskripsi,
        "Stok" => $stok
    ];

    $_SESSION['products'][] = $newProduct;
    $_SESSION['initial_load'] = false;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h5 class="text-center mt-2">Daftar Produk</h5>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-2">
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="barang" class="form-label">Barang</label>
                    <input type="text" class="form-control" id="barang" name="barang" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Produk</button>
            </form>

            <table class="table table-success table-striped table-sm mt-4">
                <thead>
                <tr>
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($_SESSION['products'] as $product) {
                    echo "<tr>";
                    echo "<td>" . $product['barang'] . "</td>";
                    echo "<td>" . $product['Harga'] . "</td>";
                    echo "<td>" . $product['Deskripsi'] . "</td>";
                    echo "<td>" . $product['Stok'] . "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
