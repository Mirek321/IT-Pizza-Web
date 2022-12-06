<?php include "hlavicka.php";?>
 <?php include "navigacia.php";?>
  <section id="rezervacia">
    <h2>Rezervácia</h2>
    <div>
      Našu pizzu si môžete vychutnať v stravovacích zariadeniach <a href="http://www.freefood.sk" title="Free Food">Free Food</a>.<br>
      Objednať si môžete z našej <a href="index.html">ponuky</a> alebo prostredníctvom <a href="http://www.bistro.sk" title="Bistro.sk">Bistro.sk</a>.<br>
			Môžete si aj rezervovať stôl v jednej z našich prevádzok.<br>
    </div>
		<form method="post">
			<label for="meno">Meno:</label> <input type="text" name="meno" id="meno" value=""><br>
			<label for="priezvisko">Priezvisko:</label> <input type="text" name="priezvisko" id="priezvisko" value=""><br>
			<label for="tel">Telefón:</label> <input type="text" name="tel" id="tel" value=""><br>
			<label for="pocet">Počet osôb:</label> <select name='pocet'>
				<option value=''>0</option>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
			</select><br>
			Mesto: <input type="radio" name="mesto" value="ba" id="ba"> <label for="ba">Bratislava</label> |
			<input type="radio" name="mesto" value="bb" id="bb"> <label for="bb">Banská Bystrica</label><br>
			Dátum: <select name='den'>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
			</select> 
			<select name='mesiac'>
				<option value='1'>január</option>
				<option value='2'>február</option>
				<option value='3'>marec</option>
				<option value='4'>apríl</option>
				<option value='5'>máj</option>
				<option value='6'>jún</option>
				<option value='7'>júl</option>
				<option value='8'>august</option>
				<option value='9'>september</option>
				<option value='10'>október</option>
				<option value='11'>november</option>
				<option value='12'>december</option>
			</select> 
			<select name='rok'>
				<option value='2018'>2018</option>
				<option value='2019'>2019</option>
			</select><br>
			Čas: <select name='hod'>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
				<option value='13'>13</option>
				<option value='14'>14</option>
				<option value='15'>15</option>
				<option value='16'>16</option>
				<option value='17'>17</option>
				<option value='18'>18</option>
				<option value='19'>19</option>
			</select> 
			<select name='min'>
				<option value='0'>00</option>
				<option value='15'>15</option>
				<option value='30'>30</option>
				<option value='45'>45</option>
			</select><br>
			<input type="submit" name="tlacidlo" value="Odošli údaje" class="odosli_velke">
		</form>
	</section>	
	<?php include "pata.php";?>
</body>
</html>
