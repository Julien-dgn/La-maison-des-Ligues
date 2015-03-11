<html>
	<?php
		// head -- title
		include('head/head.html.php');
		// menue
		include('menue/menue.html.php');
	?>

	<body>
		<div id= "page">
			<section id= "banniere">
			</section>

			<section id= "zone_recherche">
				<br/>
				<div id= "titre_recherche">RECHERCHE:</div>
				<div id= "formulaire_recherche">
					<br/>
					Type de produit: <input type= "text" name= "type_produit" style= "width:100px"/>
				</div>
			</section>

			<section id= "produit">
			</section>
		</div>
	</body>


	<?php include('footer/footer.html.php'); ?>
</html>