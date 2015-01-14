<?php 
		include('connexionBase.html.php');

		$commentaire= $base->query('SELECT pseudo, message FROM reponse_article WHERE id_article= \''.$_POST[$numeroID].'\' ');

		while($affiche_commentaire= $commentaire->fetch()){
			?><br/>
		<section id= "case_commentaire">
			<br/>
			<section id= "info_message"><br/><?php echo'['.$affiche_commentaire['pseudo'].']';?></section>
			<textarea id= "text_com" rows= "15" cols="120" name= "commentaire" readonly="readonly"><?php echo $affiche_commentaire['message'];?></textarea>
		</section>
		<?php
		}

?>