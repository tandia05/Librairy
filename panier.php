<?php
include "includes/header.php"


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div id="info1img">
		<img src="images/informatique/info_1.jpg" width="300" height="350"/>
	</div>
	<div id="info1detail">
		<span text-decoration: blink;s><p><strong><h3 style="color: red;">Promo VACANCES</h3></strong></p></span>
		<p><strong><h3>17,99 €</h3></strong></p>
		<p><strong><h4> PHP et MySQL </h4></stron></p>  </br></br></br>
		<select>
			<?php
			for ($i=1; $i <=10 ; $i++) 
			{ 
				echo '<option>'. $i .'articles' .'</option>';
			}
			?>
		</select></br></br>
		<button class="btn btn-primary active">Ajouter au panier</button>
	</div>

	






</body>
</html>