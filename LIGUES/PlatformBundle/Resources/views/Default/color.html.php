<style>
	
	/* couleur de l'arrière plan */
	html{
	background-color: AntiqueWhite;
	}

	/* header */

	#header{
	height:145px;
	width: 1300px;
	margin-left: 16%;
	text-align: center;
	}

	/* section passer du site au forum */

	#site_forum{
	height:65px;
	width:325px;
	border-bottom:1px solid white;
	margin-left: 37.53%;
	}

	#site{
	height:65px;
	width:161px;
	border-right: 1px solid white;
	border-top-left-radius: 5px;
	background-color: MediumBlue;
	float: left;
	}

	#forum{
	height:65px;
	width:161px;
	border-left: 1px solid white;
	background-color: DodgerBlue;
	border-top-right-radius: 5px;
	float: left;
	}

	/* menue */

	#menue{
	height:80px;
	width:1300px;
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #00FFFF 100%);
	border-radius: 3px;
	}

	#accueil{
	height:80px;
	width:324px;
	float: left;
	border-right: 1px solid white;
	transition-property: color, width, height;
	}

	#accueil:hover{
	height:80px;
	width:324px;
	float: left;
	border-right: 1px solid white;
	color:red;
	}

	#espace_membre{
	height:80px;
	width:324px;
	float: left;
	border-right: 1px solid white;
	}

	#compte{
	height:80px;
	width:324px;
	float: left;
	border-right: 1px solid white;
	}

	#support_aide{
	height:80px;
	width:324px;
	float: left;
	}

	/* Footer */

	#footer{
	height:50px;
	width:1300px;
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #00FFFF 100%);
	margin-left:16%;
	border-radius:3px;
	color:white;
	float: left;
	}

	#editeur_signature{
	text-align:center;
	}

	/* titre de l'emplacement de page */

	#titre_emplacement{
	height:65px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #00FFFF 100%);
	border-radius:15px;
	margin-left:11.5%;
	color:yellow;
	}

	#titre_emplacement_bas{
	height:65px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #00FFFF 100%);
	border-radius:15px;
	margin-left:11.5%;
	color:yellow;
	float: left;
	margin-top: 0.9%;
	}

	/* couleur lien + soulignement des liens désactivé */

	a:link{
	color:white;
	text-decoration:none; 
	} 

	a:visited{
	color:white;
	}

	#pageAccueil{
	height:600px;
	width:1300px;
	margin-left:16%;
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #00FFFF 100%);
	text-align: center;
	color:white;
	border-radius:3px;
	}

	/* Page espace-membre*/

	#pageEspace_membre{
	height:600px;
	width:1300px;
	margin-left:16%;
	text-align: center;
	color:white;
	border-radius:3px;
	}

	#espace_membre_news{
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	border-radius:5px;
	margin-left:11.5%;
	}

	#espace_membre_categorie{
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	border-radius:5px;
	margin-left:11.5%;
	}

	#espace_membre_aide_question{
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	border-radius:5px;
	margin-left:11.5%;
	}

	/* categorieMembre */

	#categorieMembre{
	height:600px;
	width:1300px;
	margin-left:16%;
	text-align: center;
	color:white;
	border-radius:3px;
	}

	#categorie_foot{
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	border-radius:5px;
	margin-left:11.5%;
	}

	#categorie_tennis{
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	border-radius:5px;
	margin-left:11.5%;
	}

	#categorie_handball{
	height:100px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	border-radius:5px;
	margin-left:11.5%;
	}

	/* categorie foot */

	#color_yellow{
	margin-left: 1%;
	color:yellow;
	float: left;
	width: 200px;
	}

	#color_yellow2{
	margin-left: 1%;
	color:yellow;
	float: left;
	width: 110px;
	}

	#case_select{
	height:70px;
	width:1000px;
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	border-radius:5px;
	margin-left:11.5%;
	}

	#espace_titre{
	float: left;
	margin-left: 20%;
	}

	#espace_titre2{
	float: left;
	margin-left: 10%;
	}

	/* Page ajouter article formulaire*/

	#Page_ajouter_article{
	height:600px;
	width:1300px;
	margin-left:16%;
	background-color: DodgerBlue;
	text-align: center;
	color:white;
	border-radius:30px;
	}

	#formulaire_article{
	height:400px;
	width:500px;
	background-color: Teal;
	border-radius:5px;
	margin-left: 31%;
	}

	#titre_article{
	height: 30px;
	width:500px;
	}

	#titre_article_text{
	text-align: left;
	height: 0px;
	margin-left: 10px;
	}

	#categorie_article{
	height: 30px;
	width:500px;
	text-align: left;
	margin-left: 10px;
	}

	#message_ajout_forum{
	margin-left:10%;
	}

	#ajout_article_valider{
	margin-left: 42%;
	}

	/* Page ajouter article */

	#Page_ajouter_article2{
	height:600px;
	width:1300px;
	margin-left:16%;
	background-color: DodgerBlue;
	text-align: center;
	color:white;
	border-radius:30px;
	}

	/* Page Compte */

	#pageCompte{
	height:600px;
	width:1300px;
	margin-left:16%;
	background-image: -webkit-linear-gradient(right top, #6495ED 0%, #00FFFF 100%);
	text-align: center;
	color:white;
	border-radius:3px;
	}

	#pseudo{
	margin-left: 26%;
	float: left;
	}

	#password{
	margin-left: 10%;
	float: left;
	}

	/* class */

	.boutton{
	clear: both;
	background-image: -webkit-linear-gradient(right top, #0e7e9a 0%, #4fd1f2 100%);
	color: white;
	border-radius: 15px;
	}
	.select{
	background-image: -webkit-linear-gradient(right top, #0e7e9a 0%, #4fd1f2 100%);
	color: white;
	}

	.boutton_arrondie{
	border-radius: 10px;
	background-color:gray;
	color:white;
	}
	.boutton_actif{
	border-radius: 10px;
	background-color:DeepSkyBlue;
	color:white;
	}

	.bouton_valider_repondre{
	background-image: -webkit-linear-gradient(right top, #00a43a 0%, #52df84 100%);
	color: white;
	border-radius: 15px;
	}

	.bouton_lien_repondre{
	background-image: -webkit-linear-gradient(right top, #0e7e9a 0%, #4fd1f2 100%);
	color: white;
	border-radius: 15px;
	}

	/* Etat */

	#error{
	height: 20px;
	width: 1300px;
	color:red;
	background-color:Maroon;
	}

	#valide{
	height: 20px;
	width: 1300px;
	color:green;
	background-color:DarkGreen;
	}

	#changement{
	height: 20px;
	width: 1300px;
	color:Gold;
	background-color:DarkOrange;
	}

	/* grand carré */

	#formulaireCompte{
	height:600px;
	width:1300px;
	margin-left:16%;
	background-color: DodgerBlue;
	text-align: center;
	color:white;
	border-radius:3px;
	}

	#tableau_formulaire_inscription{
	height:150px;
	width:700px;
	margin-left:23%;
	}

	#alignement{
	margin-left:25%;
	}

	#pseudo_formulaire{
	height: 30px;
	width: 360px;
	}

	#password_formulaire{
	height: 30px;
	width: 360px;
	}

	#email_formulaire{
	height: 30px;
	width: 360px;
	}

	#age_formulaire{
	height: 30px;
	width: 360px;
	}

	#hobbie_formulaire{
	height: 30px;
	width: 360px;
	}

	/* petit carré */

	#pseudo_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	#password_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	#email_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	#age_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	#hobbie_formulaire_alignement{
	text-align: left;
	height: 0px;
	}

	/* message -- commentaire */

	#info_message{
	height:152px;
	width:200px;
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	float: left;
	border-radius: 7px;
	margin-right: 10px;
	}

	#text_article{
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	color: white;
	float: left;
	}

	#repondre_article{
	height:120px;
	width:865px;
	margin-left:16%;
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	border-radius: 7px;
	margin-right: 10px;
	float: left;
	border-top:1 solid gray;
	margin-top: 15px;
	}

	#pseudo_repondre_article{
	width: 200px;
	height: 117px;
	float: left;
	}

	#bouton_repondre_article{
	float: left;
	}

	#text_com{
	background-image: -webkit-linear-gradient(right top, #008080 0%, #00CED1 100%);
	color: white;
	float: left;
	}

	#case_commentaire{
	width: 1200px;
	height: 250px;
	float: left;
	}

</style>