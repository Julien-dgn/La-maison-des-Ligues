<style type="text/css">

	body{
		background-color: #e1e1e1;
	}


	/* -Menu- */
	#menue{
		height: 50px;
		width: 50em;
		background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_menue.jpg);
		margin-left: auto;
		margin-right: auto;
		border-top-right-radius: 15%;
		border-top-left-radius: 15%;
		color: purple;
	}
	.menue_case{
		height: 50px;
		width: 12.454em;
		text-align: center;
		float: left;
	}
	.menue_case:hover{
		background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%);
	}

	#menue_case_accueil{
		height: 50px;
		width: 12.454em;
		text-align: center;
		border-top-left-radius: 23%;
		float: left;
	}
	#menue_case_accueil:hover{
		background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%); 
		border-top-left-radius: 23%;
	}
	#menue_case_panier{
		height: 50px;
		width: 12.600em;
		text-align: center;
		border-top-right-radius: 23%;
		float: left;
	}
	#menue_case_panier:hover{
		background-image: -webkit-linear-gradient(right top, #6495ED 0%, #243748 100%); 
		border-top-right-radius: 23%;
	}

	#pageAccueilButton{
		background-color: transparent;
		width: 200px;
		height: 50px;
		border-top-left-radius: 23%;
		outline: none;
		color:purple;
		cursor: pointer;
	}
	.pageProduitCompteButton{
		background-color: transparent;
		width: 200px;
		height: 50px;
		outline: none;
		color:purple;
		cursor: pointer;
	}
	#pagePanierButton{
		background-color: transparent;
		width: 200px;
		height: 50px;
		outline: none;
		color:purple;
		cursor: pointer;
		border-top-right-radius: 23%;
		border-right:none;
	}


	/* -Page- */
	#page{
		-webkit-transition-duration: 1.5s;
		-o-transition-duration: 1.5s;
		-moz-transition-duration: 1.5s;
		height: 0px;
		width: 50em;
		background-color: white;
		margin-left: auto;
		margin-right: auto;
	}


	/* -PageAccueil- */
	#banniere{
		-webkit-transition-duration: 1.5s;
		-o-transition-duration: 1.5s;
		-moz-transition-duration: 1.5s;
		height: 0px;
		width: 50em;
		background-image: -webkit-linear-gradient(right top, #5a5a5a 0%, #243748 100%);
		text-align: center;
		color: white;
		overflow:hidden;
	}

	/* slider*/
	#slider{
		height: 280px;
		width:650px;
		text-align: center;
		margin-left: auto;
		margin-right: auto;
		margin-top: 50px;
	}
	#bordure_slider{
		-webkit-transition-duration: 1.5s;
		-o-transition-duration: 1.5s;
		-moz-transition-duration: 1.5s;
		border: 0px solid gray;
		height: 0px;
		width:0px;
		overflow:hidden;
		background-color:black;
	}
	#boutton_gauche{
		border:none;
		background-color:gray;
		color:white;
		border-radius:10px;
		width:75px;
		outline: none;
		cursor: pointer;
		display:none;
	}
	#boutton_gauche:hover{
		background-color:Silver;
	}
	#boutton_droite{
		border:none;
		background-color:gray;
		color:white;
		border-radius:10px;
		width:75px;
		outline: none;
		cursor: pointer;
		display:none;
	}
	#boutton_droite:hover{
		background-color:Silver;
	}
	#image1{
		-webkit-transition-duration: 1.5s;
		-o-transition-duration: 1.5s;
		-moz-transition-duration: 1.5s;
		float:left;
	}
	#image2{
		-webkit-transition-duration: 1.5s;
		-o-transition-duration: 1.5s;
		-moz-transition-duration: 1.5s;
		float:left;
	}
	#image3{
		-webkit-transition-duration: 1.5s;
		-o-transition-duration: 1.5s;
		-moz-transition-duration: 1.5s;
		float:left;
	}


	/* -PageProduit */
	#zone_recherche{
		height: 500px;
		width: 240px;
		border:1px solid purple;
		border-radius: 7px;
		margin-left: 5%;
		margin-top: 5%;
		color: purple;
		background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_banniere.jpg);
		box-shadow: 5px 4px 7px #434343;
	}
	#titre_recherche{
		height: 16px;
		width: 100px;
		margin-left: auto;
		margin-right: auto;
	}
	#formulaire_recherche{
		margin-top: 5%;
	}


	/* -PageCompte- */
	#information_compte{
		height: 420px;
		width: 28em;
		border-radius: 7px;
		box-shadow: 5px 4px 12px #a4a4a4;
		text-align: center;
		margin-top: 5%;
		margin-left: 172px;
		margin-right: auto;
		float: left;
		background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_banniere.jpg);
	}
	#info{
		height: 135px;
		width: 25em;
		border: 4px solid gray;
		background-color: white;
		margin-top: 5%;
		margin-right: auto;
		margin-left: auto;
	}
	#cadreVendre{
		-webkit-transition-duration: 1.5s;
		-o-transition-duration: 1.5s;
		-moz-transition-duration: 1.5s;
		height: 0px;
		width: 25em;
		background-color: white;
		margin-top: 5%;
		margin-right: auto;
		margin-left: auto;
		overflow: hidden;
	}
	#action_compte{
		height: 420px;
		width: 145px;
		margin-top: 5%;
		margin-left: 3%;
		float: left;
	}

	.buttonActionCompte{
		height: 40px;
		width: 140px;
		color: white;
		border:0px;
		border-radius:5px;
		cursor: pointer;
	}


	/* -Footer- */
	#footer{
		height: 50px;
		width: 50em;
		background-image: url(http://localhost/Symfony/web/bundles/image_projet/texture_menue.jpg);
		margin-left: auto;
		margin-right: auto;
		border-bottom-right-radius: 15%;
		border-bottom-left-radius: 15%;
	}
</style>