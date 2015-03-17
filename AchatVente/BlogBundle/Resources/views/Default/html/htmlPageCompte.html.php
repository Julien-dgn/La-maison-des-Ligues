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

			<section id= "information_compte">
				<br/>Information du compte:
				<div id= "info">
				</div>

				<div id= "cadreVendre">
					<br/>Nom du produit: <input type= "text" name= "nom_produit"/>
					<br/>Prix: <input type= "text" name= "prix_produit" style= "width:50px"/>
					<br/><br/>Detail du produit: <br/><textarea name= "detail_produit" rows= "3" cols="30" ></textarea>
				</div>
			</section>

			<section id= "action_compte">
				<input type= "button" id= "vendre" name= "vendre" class= "buttonActionCompte" style= "background-color: green;" value= "Mettre en vente"/>
				<br/><br/>
				<input type= "button" name= "historique_achat" class= "buttonActionCompte" style= "background-color: orange;" value= "Historique des achats"/>
				<br/><br/>
				<input type= "button" name= "historique_vente" class= "buttonActionCompte" style= "background-color: DarkOrange;" value= "Historique des ventes"/>
				<br/><br/>
				<input type= "button" name= "modifier_compte" class= "buttonActionCompte" style= "background-color: Teal;" value= "Modifier le compte"/>
				<br/><br/>
				<input type= "button" name= "option_preference" class= "buttonActionCompte" style= "background-color: DarkSlateGray;" value= "Parametre du site"/>
			</section>
		</div>
	</body>


	<?php include('footer/footer.html.php'); ?>
</html>