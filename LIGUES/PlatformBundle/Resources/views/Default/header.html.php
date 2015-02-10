<?php
	if(empty($_SESSION)){
		session_start();
	}
?>
		<header id= "header">							<!-- Header -->
			<section id= "site_forum">					<!-- Lien qui permet de passer du site au forum -->
				<a href="">
					<section id= "site">
						<br/>SITE
					</section>
				</a>

				<a href="">
				<section id= "forum">
					<br/>FORUM
				</section>
				</a>
				
			</section>

			<section id= "menue">						<!-- Menu -->
				<a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum', array(),true); echo $url; ?> " >
					<section id= "accueil">
						<br/>ACCUEIL
					</section>
				</a>

				
					<a href=" <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre', array(),true); echo $url; ?>">
						<section id= "espace_membre">
							<br/>ESPACE MEMBRE
						</section>
					</a>
				
				<a href=" <?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url ?> ">
					<section id= "compte">
						<br/><?php if(!empty($_SESSION['pseudo'])){echo $_SESSION['pseudo'];} else{ echo 'COMPTE'; }?>
					</section>
				</a>

				<a href="">
					<section id= "support_aide">
						<br/>SUPPORT/BUG
					</section>
				</a>
			</section>
		</header> <br/>