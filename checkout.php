<!DOCTYPE html>
<html>
<head>
    <title>Struk Toko Kidang Kembar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="fffff">
    <h1>Struk Toko Kidang Kembar</h1>
    <div class="containerr">
        <h3>Ringkasan Pembelian:</h3>
        <ul>
            <?php
                $total = 0;

                if ($_POST["amistartop"] > 0) {
                    $amistartop = $_POST["amistartop"];
                    $total += $amistartop * 65000;
                    echo "<li>amistartop: " . $amistartop . " satuan</li>";
                }

                if ($_POST["starban"] > 0) {
                    $starban = $_POST["starban"];
                    $total += $starban * 75000;
                    echo "<li>starban: " . $starban . " satuan</li>";
                }

                if ($_POST["plenum"] > 0) {
                    $plenum = $_POST["plenum"];
                    $total += $plenum * 35000;
                    echo "<li>plenum: " . $plenum . " satuan</li>";
                }

                echo "<li><strong>Total Pembelian: Rp " . $total . "</strong></li>";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $amistartop = $_POST["amistartop"];
                $starban = $_POST["starban"];
                $plenum = $_POST["plenum"];

                // Harga per unit
                $amistartop_price = 65000;
                $starban_price = 75000;
                $plenum_price = 35000;

                // Hitung total pembelian
                $total = ($amistartop * $amistartop_price) + ($starban * $starban_price) + ($plenum * $plenum_price);

                // Simpan data pembelian ke file txt
                $data = "amistartop: " . $amistartop . " satuan\n";
                $data .= "starban: " . $starban . " satuan\n";
                $data .= "plenum: " . $plenum . " satuan\n";
                $data .= "Total Pembelian: Rp " . $total;

                $file = fopen("struk.txt", "w");
                fwrite($file, $data);
                fclose($file);
            }
        ?>
    </ul>
    </div>
    <center>
        <h2>Terima kasih sudah berbelanja!</h2>
        <a href="index.html">Kembali</a>
    </center>
    
</body>
</html>