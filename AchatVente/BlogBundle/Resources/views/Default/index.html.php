<?php

	class AchatVente{

		//Charge le html
			function HtmlPageAccueil(){
				if(empty($_POST['pageProduitButton']) && empty($_POST['pageCompteButton'])){
					include('html/htmlPageAccueil.html.php');
				}	
			}
			function HtmlPageProduit(){
				if(!empty($_POST['pageProduitButton'])){
					include('html/htmlPageProduit.html.php');
				}
			}
			function HtmlPageCompte(){
				if(!empty($_POST['pageCompteButton'])){
					include('html/htmlPageCompte.html.php');
				}
			}
		//Charge le css
			function CssPageAccueil(){
				include('css/cssPageAccueil.html.php');
			}
		//Charge les méthodes
			function EffectOpen(){
				//effet d'ouverture d'une page
				include('method/effetJavaOpen.html.php');
			}
			function EffectOpenElementAccueil(){
				if(empty($_POST['pageProduitButton'])){
					//effet d'ouverture de tous les éléments de la page accueil
					include('method/effetJavaOpenAccueil.html.php');
				}	
			}
			function SliderAccueil(){
				//change l'image du slider
				include('method/sliderJava.html.php');
			}
			function ActionButtonCompte(){
				if(!empty($_POST['pageCompteButton'])){
					//ouvre un champs d'action
					include('method/actionButtonCompteJava.html.php');
				}
			}

	}


$cssAccueil= new AchatVente();	// Créer un objet AchatVente

$cssAccueil->HtmlPageAccueil();	// Charge la page acceuil
$cssAccueil->HtmlPageProduit(); // Charge la page produit
$cssAccueil->HtmlPageCompte();	// Charge la page compte
$cssAccueil->CssPageAccueil();	// Charge le css de la page acceuil
$cssAccueil->EffectOpen();	// Charge l'animation d'ouverture d'une page
$cssAccueil->EffectOpenElementAccueil(); // Charge les animations de la page d'accueil
$cssAccueil->SliderAccueil();	// Charge le fonction de changement d'image
$cssAccueil->ActionButtonCompte();	// Charge la fonction d'action des bouttons
?>