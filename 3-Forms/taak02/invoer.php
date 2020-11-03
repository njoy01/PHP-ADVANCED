<!doctype html>
<html>
<body>

<form action="mijngegevens.php" method="post">
</Voornaam:><input type="text" name="Voornaam">Voornaam:<br>
</Achternaam:><input type="text" name="Achternaam">Achternaam:<br>
</Klas:><input type="text" name="Klas">Klas:<br>
</Leeftijd:><input type="text" name="Leeftijd">Leeftijd:<br>
</Adres:><input type="text" name="Adres">Adres:<br>
</Plaatsnaam:><input type="text" name="Plaatsnaam">Plaatsnaam:<br>
</muziekband:><input type="text" name="muziekband">Favoriete muziekband:<br>
Geslacht:
<input type="radio" id="man" name="Geslacht" value="man">
<label for="Man">Man</label>
<input type="radio" id="Vrouw" name="Geslacht" value="Vrouw">
<label for="Vrouw">Vrouw</label>
  <br>
  <div class="custom-select" style="width:200px;">
  <select name="lievelingskleur">
    <option value="">kies kleur:</option>
    <option value="blue">Blauw</option>
    <option value="red">rood</option>
    <option value="yellow">geel</option>
    <option value="green">groen</option>
    <option value="black">zwart</option>

  </select>
</div>
<input type="submit">
</form>

</body>
</html>

