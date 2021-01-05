<style>
  .btn_style{
    border: 1px solid #cecece;
    border-radius: 3px;
    padding: 10px 20px;
    box-shadow: 2px 2px 6px rgba(0.5, 0, 0, 0.5);
    color: White;
    background-color: red;
  }
  .btn_style:hover{
    border: 1px solid #b1b1b1;
    box-shadow: 2px 2px 8px rgba(0.5, 0, 0, 0.5);
  }
  </style>
<article>
  <div id="form" style="text-align:center">
    <form method="post" action="">
      <p>Masukkan Kata :</p>
      <input type="text" name="kata" id="kata" size="100" placeholder=" "
        value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
      <br/>
      <button type="submit" name="submit" class="btn_style"> Stemm </button>
    </form>
    <br>
    <?php 
      if(isset($_POST['kata'])) {
        $teksAsli = $_POST['kata'];
        echo "<p>Teks Input : " .$teksAsli. "</p>";
        $stemming = stemming($teksAsli);
        echo "<p>Kata Dasar : <b>" .$stemming. "</b></p>";
        }
    ?>
  </div>
</article>