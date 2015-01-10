<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>
		<section id= "Page_ajouter_article"> <!-- CODE -->
			<section id= "titre_emplacement"><br/>PAGE: AJOUTER UN ARTICLE -- CATEGORIE: <?php echo $_POST['article_foot']; ?></section>
  <br/><br/><section id= "formulaire_article">
				<section id= "alignement"></section>
					<br/><br/>
			<form method= "post" action= "<?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_ajouter_article', array(),true); echo $url; ?>">
					<section id= "titre_article"><section id="titre_article_text">Titre de l'article:</section> 
						<input type= "text" name= "titre_article"/></section><br/>
						<section id= "categorie_article">
							Categorie de l'article:<select name= "categorie_article" class= "select"></section>
					<option id= "<?php echo $_POST['article_foot']; ?>"><?php echo $_POST['article_foot']; ?></option></select>
					
					<section id= "message_article">
						<br/>Message:<br/><br/><section id= "message_ajout_forum"><textarea rows= "10" cols="50" name= "message"></textarea></section>
					</section>
					<br/>
					<section id= "ajout_article_valider">
						<input type= "submit" name= "ajout_article_valider" class= "boutton" value= "envoyer"/>
					</section>
				</form>
			</section>
			</section>
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>