<?php 
$nadpis = "Galeria";
include "hlavicka.php";?>
 <?php include "navigacia.php";?>
  <section id="galeria">
    <h2>Fotogaléria</h2>
    <div>
      <h3>prevádzka Bratislava</h3>
      <?php
       for ($x = 1; $x <= 5; $x++) { ?>
        <img src="obrazky/foto-0<?php echo $x;?>m.jpg" alt="foto <?php echo $x;?>" width="160" height="120">
      <!-- <img src="obrazky/foto-02m.jpg" alt="foto 2" width="160" height="120">
      <img src="obrazky/foto-03m.jpg" alt="foto 3" width="160" height="120">
      <img src="obrazky/foto-04m.jpg" alt="foto 4" width="160" height="120">
      <img src="obrazky/foto-05m.jpg" alt="foto 5" width="160" height="120"> -->
      <?php }?>
       
     
    </div>
    <div>
      <h3>prevádzka Banská Bystrica</h3>
      <?php
      $cisla = array("06","07","08","09","10");
      for ($x = 1; $x <= 5; $x++) { ?>
      <img src="obrazky/foto-<?php echo $cisla[$x-1]?>m.jpg" alt="foto <?php echo $x?>" width="160" height="120">
      <!-- <img src="obrazky/foto-07m.jpg" alt="foto 2" width="160" height="120">
      <img src="obrazky/foto-08m.jpg" alt="foto 3" width="160" height="120">
      <img src="obrazky/foto-09m.jpg" alt="foto 4" width="160" height="120">
      <img src="obrazky/foto-10m.jpg" alt="foto 5" width="160" height="120"> -->
      <?php }?>
    </div>
  </section>
  <?php include "pata.php";?>
</body>
</html>
