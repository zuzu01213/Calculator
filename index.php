<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <header class="header">
        <p class="page">A Web Page</p>
        <div class="left-section">
            <img class="left-arrow" src="images/left.png">
            <img class="right-arrow" src="images/right.png">
            <img class="cross" src="images/cross.png">
            <img class="home-img" src="images/home.png">
        </div>
        <div class="middle-section">
            <input class="search-bar" type="text" placeholder="https://localhost">
            <img class="search-icon" src="images/search.png">
        </div>
    </header>  
    <div class="calculator-container">
        <h4 class="card-title">Kalkulator penambahan</h4>
        <form action="index.php" method="post">
            <div class="card-container">
                <p class="card-text">Angka Pertama</p>
                <input type="number" name="angka1" placeholder="Masukan Angka:">
                <p class="card-text">Angka Kedua</p>
                <input type="number" name="angka2" placeholder="Masukan Angka:">
                   <?php
                   if (empty($_POST['angka1'])) {
                    echo "<p>Silakan masukkan angka yang valid.</p>";
                  } else {
                    $angka1 = $_POST['angka1'];
                    $angka2 = $_POST['angka2'];
                    $hasil = $angka1 + $angka2;
                    echo "<div class='hk'><p class='hk'>Hasil: <p>$hasil</p></p></div>";
                  }
                  ?>
            </div>
            <button type="submit" name="hitung" class="hasil-button">Hitung</button>
        </form>
    </div>
    <footer class="footer-container">
        <img class="strips-icon" src="images/strips.png">
    </footer>
</body>
</html>


