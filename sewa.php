<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Motor</title>
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

    h2 {
      text-align: center;
      color: #000000;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 5px;
      color: #000000;
    }

    input, select {
      margin-bottom: 15px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    button {
      padding: 10px;
      background-color: #2844a7;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #1d3c96;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Rental Motor</h2>
    <form action="cetak.php" method="post">
      <label for="nama"><strong>Nama:</strong></label>
      <input type="text" id="nama" name="nama" required>
      
      <label for="lama_rental"><strong>Lama Waktu Rental (per hari):</strong></label>
      <input type="number" id="lama_rental" name="lama_rental" min="1" required>

      <!-- <label for="jenis_motor"><strong>Jenis Motor:</strong></label>
      <select name="jenis_motor" id="jenis_motor" required>
        <option hidden>Pilih Motor</option>
        <option value="vario">Vario</option>
        <option value="beat">Beat</option>
        <option value="vesmet">Vesmet</option>
        <option value="scoopy">Scoopy</option>
      </select> -->
      <input type="hidden" name="jenis_motor" value="<?php echo isset($_GET['motor']) ? $_GET['motor'] : ''; ?>">
      
      <button type="submit" name="submit">Bayar</button>
    </form>
  </div>
</body>
</html>
