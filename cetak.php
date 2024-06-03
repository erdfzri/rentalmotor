<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bukti Pembayaran</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #066e48;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #8a1c08;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      width: 300px;
    }

    .receipt {
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 5px;
      text-align: center;
    }

    .receipt h2 {
      color: #333;
    }

    .receipt p {
      margin: 5px 0;
      color: #555;
    }

    .receipt img {
      max-width: 100%;
      display: block;
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $lama_rental = $_POST['lama_rental'];
        $jenis_motor = $_POST['jenis_motor'];

        class Rental {
            private $nama;
            private $lama_rental;
            private $jenis_motor;
            private $harga_motor = [
                "vario" => 150000,
                "beat" => 125000,
                "vesmet" => 200000,
                "scoopy" => 150000
            ];
            private $gambar_motor = [
                "vario" => "images/vario.jpg",
                "beat" => "images/beat.jpg",
                "vesmet" => "images/vesmet.jpg",
                "scoopy" => "images/scoopy.jpg"
            ];
            private $member = ["adul", "eka", "erdi"];
            private $pajak = 10000;

            public function __construct($nama, $lama_rental, $jenis_motor) {
                $this->nama = $nama;
                $this->lama_rental = $lama_rental;
                $this->jenis_motor = $jenis_motor;
            }

            public function calculateTotal() {
                $harga_per_hari = $this->harga_motor[$this->jenis_motor];
                $total_harga = $harga_per_hari * $this->lama_rental;

                if (in_array($this->nama, $this->member)) {
                    $diskon = $total_harga * 0.05;
                    $total_harga -= $diskon;
                }

                $total_harga += $this->pajak;
                return $total_harga;
            }

            public function displayReceipt() {
                $total_harga = $this->calculateTotal();
                $gambar_motor = $this->gambar_motor[$this->jenis_motor];
                echo "<div class='receipt'>";
                echo "<h2>Bukti Pembayaran</h2>";
                echo "-------------------------------";
                echo "<p>Nama : {$this->nama}</p>";
                echo "<p>Lama Waktu Sewa: {$this->lama_rental} hari</p>";
                echo "<p>Jenis Motor Sewa: {$this->jenis_motor}</p>";
                echo "<p>Besar Harga Yang Harus di Bayar: Rp. " . number_format($total_harga, 2, ',', '.') . "</p>";
                echo "<img src='{$gambar_motor}' alt='{$this->jenis_motor}'>";
                echo "</div>";
            }
        }

        $rental = new Rental($nama, $lama_rental, $jenis_motor);
        $rental->displayReceipt();
    } else {
        echo "<p>Invalid request method.</p>";
    }
    ?>
  </div>
</body>
</html>
