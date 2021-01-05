<!DOCTYPE html>
<html lang="en">

<?php
  require_once ('stemming.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stemming | Emanuell H Jani</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header class="header">
    <h1>UAS Sistem Penunjang Keputusan</h1>
    <p>Stemming Algoritma Nazief di PHP dan MySQL</p>
    <p>Nama : Emanuell H Jani | 171011400938</p>
    <p>Kelas : 07TPLM006</p>
  </header>

  <main class="main">
    <div class="content">
      <?php
        if (isset($_GET['/'])) {
          $pageload=$_GET['/'];
        }else{
          $pageload="/";
        }
        switch ($pageload) {
          case 'view':
            include "view.php";
            break;
          default:
            include "home.php";
            break;
        }
      ?>
    </div>
  </main>
  <footer class="footer">
    <p>Copyright &copy 2021 EMANUEL H JANI</p>
  </footer>

</body>

</html>