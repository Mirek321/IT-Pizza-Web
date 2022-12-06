<?php
$nadpis = "Košík";
include "hlavicka.php";
include "navigacia.php";
include "data.php";
?>

<section id="kosik">
    <h2>Nákupný košík</h2>
    
      <?php 
        if(isset($_SESSION['kosik']))
        {#
          $celk_cena=0;
          $pocet_pizz = array_count_values($_SESSION['kosik']);
          $kosik = array_unique($_SESSION['kosik']);
      
        
      ?>
<div class="pizza" style="padding: 10px;">
        <?php 
          foreach($kosik as $h)
          {
          echo $nazvy[$h]."<br>";
          ?>
          <img src="obrazky/<?=$subory[$h]?>.jpg"><br>
          <?php
          echo "Množstvo: " . $pocet_pizz[$h]."<br>";
          echo "Cena:".$pocet_pizz[$h]*$cena[$h]."€"."<br><br>";
          $celk_cena+=$pocet_pizz[$h]*$cena[$h];
          }
          
        ?>
       </div>
      <?php echo "<p>Celkova cena objednávky je: $celk_cena €</p>" ?>
      <?php } ?>
      <form action="kosik.php" method="post">
      <input type="submit" value="Vyprázdniť košík" name="vyprazdnit">
      </form>
      <?php 
        if(isset($_POST['vyprazdnit'])){
          session_unset();
        }?>
</section>

  <?php 
  include "pata.php";
  ?>

</body>
</html>
