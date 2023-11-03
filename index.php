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
        <p class="page">Simple Calculator</p>
        <div class="left-section">
            <a href="https://youtu.be/dQw4w9WgXcQ">
            <img class="left-arrow" src="images/left.png"></a>
            <img class="right-arrow" src="images/right.png">
            <img class="cross" src="images/cross.png">
            <img class="home-img" src="images/home.png">     
        </div>
        <div class="middle-section">
            <input class="search-bar" type="text" placeholder="https://localhost">
            <a href="https://youtu.be/dQw4w9WgXcQ">
                <img class="search-icon" src="images/search.png">
            </a>
        </div>
    </header>  
    <div class="main-container" >
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
                  } 
                  else {
                    $angka1 = $_POST['angka1'];
                    $angka2 = $_POST['angka2'];
                    $hasil1 = $angka1 + $angka2;
                    echo "<div class='hk'><p class='hk'>Hasil: <p> $hasil1</p></p></div>";
                  }
                  ?>
            </div>
            <button type="submit" name="hitung" class="hasil-button">Hitung</button>
        </form>
    </div>
    <div class="calculator-container-2">
        <h4 class="card-title">Kalkulator pengurangan</h4>
        <form action="index.php" method="post">
            <div class="card-container">
                <p class="card-text">Angka Pertama</p>
                <input type="number" name="angka3" placeholder="Masukan Angka:">
                <p class="card-text">Angka Kedua</p>
                <input type="number" name="angka4" placeholder="Masukan Angka:">
                   <?php
                   if (empty($_POST['angka3'])) {
                    echo "<p>Silakan masukkan angka yang valid.</p>";
                  } else {
                    $angka3 = $_POST['angka3'];
                    $angka4 = $_POST['angka4'];
                    $hasil2 = $angka3 - $angka4;
                    echo "<div class='hk'><p class='hk'>Hasil: <p> $hasil2</p></p></div>";
                  }
                  ?>
            </div>
            <button type="submit" name="hitung" class="hasil-button-2">Hitung</button>
        </form>
    </div>
    <div class="calculator-container-3">
        <h4 class="card-title">Kalkulator perkalian</h4>
        <form action="index.php" method="post">
            <div class="card-container">
                <p class="card-text">Angka Pertama</p>
                <input type="number" name="angka5" placeholder="Masukan Angka:">
                <p class="card-text">Angka Kedua</p>
                <input type="number" name="angka6" placeholder="Masukan Angka:">
                   <?php
                   if (empty($_POST['angka5'])) {
                    echo "<p>Silakan masukkan angka yang valid.</p>";
                  } else {
                    $angka5 = $_POST['angka5'];
                    $angka6 = $_POST['angka6'];
                    $hasil3 = $angka5 * $angka6;
                    echo "<div class='hk'><p class='hk'>Hasil: <p> $hasil3</p></p></div>";
                  }
                  ?>
            </div>
            <button type="submit" name="hitung" class="hasil-button">Hitung</button>
        </form>
    </div>
    </div>
    <footer class="footer-container">
        <img class="strips-icon" src="images/strips.png">
    </footer>
</body>
</html>


