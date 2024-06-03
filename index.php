<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilih Motor</title>
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
      width: 80%;
      text-align: center;
    }

    h2 {
      color: #ffffff;
      margin-bottom: 20px;
    }

    .motor-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .motor {
      background-color: #ffffff;
      border-radius: 5px;
      padding: 10px;
      margin: 10px;
      cursor: pointer;
      transition: transform 0.2s;
    }

    .motor:hover {
      transform: scale(1.05);
    }

    .motor img {
      width: 150px;
      height: 100px;
      object-fit: cover;
      border-radius: 5px;
    }

    .motor p {
      margin: 10px 0 0;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Pilih Motor untuk Disewa</h2>
    <div class="motor-container">
      <div class="motor" onclick="window.location.href='sewa.php?motor=vario'">
        <img src="images/vario.jpg" alt="Vario">
        <p>Vario</p>
      </div>
      <div class="motor" onclick="window.location.href='sewa.php?motor=beat'">
        <img src="images/beat.jpg" alt="Beat">
        <p>Beat</p>
      </div>
      <div class="motor" onclick="window.location.href='sewa.php?motor=vesmet'">
        <img src="images/vesmet.jpg" alt="Vesmet">
        <p>Vesmet</p>
      </div>
      <div class="motor" onclick="window.location.href='sewa.php?motor=scoopy'">
        <img src="images/scoopy.jpg" alt="Scoopy">
        <p>Scoopy</p>
      </div>
    </div>
  </div>
</body>
</html>
