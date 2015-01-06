<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>									
		<section id= "categorieMembre">		<!-- CODE -->
			<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_ajouter_article', array(),true); echo $url; ?>">
					<section id= "titre_emplacement">
						<br/>PAGE: FOOTBALL -- ajouter un article dans la catégorie: 
						<select name= "article_foot" class= "select"><option id = "foot">FOOTBALL</option></select> 
						<input type= "submit" name= "cree" class= "boutton" value= "CREER"/>
					</section>
			</form>
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>