

		<header id= "header">							<!-- Header -->
			<section id= "site_forum">					<!-- Lien qui permet de passer du site au forum -->
				<section id= "site">
					<br/><a href="">SITE</a>
				</section>

				<section id= "forum">
					<br/><a href="">FORUM</a>
				</section>
			</section>

			<section id= "menue">						<!-- Menu -->
				<section id= "accueil">
					<br/><a href= " <?php $url = $this->get('router')->generate('ligues_platform_forum', array(),true); echo $url; ?> " >ACCUEIL</a>
				</section>

				<section id= "espace_membre">
					<br/><a href=" <?php $url = $this->get('router')->generate('ligues_platform_forum_espace_membre', array(),true); echo $url; ?>">ESPACE MEMBRE</a>
				</section>

				<section id= "compte">
					<br/><a href=" <?php $url = $this->get('router')->generate('ligues_platform_forum_compte', array(),true); echo $url ?> ">COMPTE</a>
				</section>

				<section id= "support_aide">
					<br/><a href="">SUPPORT/BUG</a>
				</section>
			</section>
		</header> <br/>