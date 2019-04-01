<head>
	    <meta charset="utf-8" />
        <link rel="stylesheet" href="./css/style.css" />
		<link rel="shortcut icon" href="images/verredebière.jpg" />
        <title>Le site de la BeerPoney</title>
</head>

<?php
  require 'array_php.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>La boutique BeerPoney</title>
</head>
<body>

	<div class="fichebiere">

		<?php
			for ($i = 0 ; $i < count($beerArray) ; $i++)
			{
				?>
					<div class="ficheproduit">	
						<div class="titreproduit"><?= $beerArray[$i][0] ?></div>
						<div class="imageproduit"><img src="<?= $beerArray[$i][1] ?>"></div>
						<div class="texteproduit"><?= $beerArray[$i][2] ?></div>
						<div class="prixproduit"><?= $beerArray[$i][3] ?></div>
					</div>	
				<?php

			}
		?>
	</div>
</body>
</html>