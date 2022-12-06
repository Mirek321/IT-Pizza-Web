<?php include "hlavicka.php";?>
 <?php include "navigacia.php";?>
  <section id="praca">
    <h2>Ponuka práce</h2>
    <div>
      Hľadáme spolupracovníkov. Ak máte záujem, vyplňte nasledujúci formulár.
    </div>
    <form method="post">
			<label for="meno">Meno:</label> <input type="text" name="meno" id="meno" value=""><br>
			<label for="priezvisko">Priezvisko:</label> <input type="text" name="priezvisko" id="priezvisko" value=""><br>
			<label for="tel">Telefón:</label> <input type="text" name="tel" id="tel" value=""><br>
			<label for="email">E-mail:</label> <input type="text" name="email" id="email" value=""><br>
			<label for="vek">Vek:</label> <input type="text" name="vek" id="vek" value=""><br>
			<label for="pozicia">Pozícia:</label> <select name='pozicia'>
				<option value='kuchar'>kuchár</option>
				<option value='casnik'>čašník</option>
				<option value='vodic'>vodič</option>
				<option value='pomoc'>pomocná sila</option>
			</select><br>
			Prevádzka: <input type="radio" name="mesto" value="ba" id="ba"> <label for="ba">Bratislava</label> |
			<input type="radio" name="mesto" value="bb" id="bb"> <label for="bb">Banská Bystrica</label><br>
			<label for="vzdelanie">Vzdelanie:</label> <textarea name="vzdelanie" id="vzdelanie"></textarea><br>
			<label for="prax">Prax:</label> <textarea name="prax" id="prax"></textarea><br>
			Jazyky: <br>
			<input type="checkbox" name="aj" value="aj" id="aj"> <label for="aj">anglický</label><br>
			<input type="checkbox" name="nj" value="nj" id="nj"> <label for="nj">nemecký</label><br>
			<input type="checkbox" name="mj" value="mj" id="mj"> <label for="mj">maďarský</label><br>
			<input type="checkbox" name="tj" value="tj" id="tj"> <label for="tj">talianský</label><br>
			<input type="checkbox" name="sj" value="sj" id="sj"> <label for="sj">španielský</label><br>
			<input type="submit" name="tlacidlo" value="Odošli údaje" class="odosli_velke">
		</form>
	</section>
  <?php include "pata.php";?>
</body>
</html>
