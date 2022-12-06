<?php


// print_r($_SESSION['kosik']);

$nadpis = "Ponuka";
include "hlavicka.php";
include "navigacia.php";
include "data.php";
if (isset($_POST['pizza'])) {
  $_SESSION['kosik'][] = $_POST['pizza'];
}
?>
<section id="ponuka">
  <h2>Ponuka</h2>
  <div>
    Našu pizzu si môžete vychutnať aj v stravovacích zariadeniach <a href="http://www.freefood.sk" title="Free Food">Free Food</a>.<br>
    Objednať si môžete cez náš objednávkový formulár alebo prostredníctvom <a href="http://www.bistro.sk" title="Bistro.sk">Bistro.sk</a>.<br>
    <a href="alergeny.html">Zoznam alergénov</a>
  </div><br>

  <?php foreach ($nazvy as $kluc => $hodnota) { ?>

    <article>
      <h3><?php echo "$hodnota ($cena[$kluc] &euro;)"; ?></h3><?php echo "$popis[$kluc]" ?><sub><?php echo "$alergeny[$kluc]" ?></sub><br>
      <form method="post" class="form_kosik"><button type="submit" name="pizza" value="<?php echo $kluc; ?>" class="odosli_male"><img src="obrazky/kosik.png" alt="nákupný košík" width="16" height="16" title="do košíka"></button>
      </form>
      <img src="obrazky/<?php echo $subory[$kluc]; ?>.jpg" alt="pizza <?php $hodnota ?>" width="165" height="124">
    </article>
  <?php } ?>

</section>
<aside id="akcia">
  <h2>Akcia</h2>
  <p><strong>Každý pondelok</strong> pri kúpe <strong>troch pízz</strong> podľa ľubovoľného výberu máte najlacnejšiu z nich zadarmo.</p>
</aside>

<?php include "pata.php"; ?>

</body>
</html>