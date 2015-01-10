<?php session_start(); ?>
<html>
	<?php include('head.html.php'); ?>		<!-- head -->
	
	<?php include('header.html.php') ?>		<!-- header -->

	<body>									
		<section id= "categorieMembre">		<!-- CODE -->
			<?php
				include('connexionBase.html.php');

			// initialisation variable	
				$tour= 0;
				$nbTour= $_POST['nbResultat'];
				$end= 0;
				// variable pour la génération du nom

				$nomArticle= 'voir_article';
				$numeroID= 0;
				$id= 'id';

				while($tour != $nbTour && $end != 1){
					
					$tour++;
					$numeroID++;
					$name=	$nomArticle.$numeroID;

					if(!empty($_POST[$name])){

						$numeroID= $id.$numeroID;
						$req= $base->query('SELECT titre_article, categorie_article, message, pseudo FROM article WHERE id = \''.$_POST[$numeroID].'\' ');
						$recherche= $req->fetch();
						echo '<section id= "titre_emplacement"><br/>TITRE ARTICLE -- '.''.$recherche['titre_article'].'</section><br/>';
						echo $recherche['message'];
						$end= 1;
					}
					
				}

			?>
		</section>
	</body>

	<?php include('footer.html.php'); ?>	<!-- footer -->
</html>