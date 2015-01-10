<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>									
		<section id= "pageEspace_membre">	<!-- CODE -->
			<section id= "titre_emplacement"><br/>PAGE: ESPACE MEMBRE</section><br/><br/>
			<br/><br/><section id= "espace_membre_news"><br/><a href= "">NEWS</a></section>
			<br/><br/><section id= "espace_membre_categorie"><br/>
			<a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre_categorie_membre', array(),true); echo $url; ?>">
				CATEGORIE D'ARTICLE DES MEMBRES
			</a></section>
			<br/><br/><section id= "espace_membre_aide_question"><br/>AIDE/QUESTION</section>
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>
