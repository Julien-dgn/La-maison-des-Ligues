<?php

namespace LIGUES\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function forumAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:forum.html.php');
    }

      public function compteAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:compte.html.php');
    }

    public function formulaire_inscriptionAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:formulaireCompte.html.php');
    }

    public function espace_membreAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:espaceMembre.html.php');
    }

    public function espace_membre_categorieAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:categorieMembre.html.php');
    }

    public function categorie_footAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:categorie_foot.html.php');
    }

    public function ajouter_article_formulaireAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:ajouter_article_formulaire.html.php');
    }

    public function ajouter_articleAction()
    {
        return $this->render('LIGUESPlatformBundle:Default:ajouter_article.html.php');
    }
}
