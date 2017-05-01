<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{

    // Affichage de la page d'accueil de notre Bundle
    public function indexAction($page)
    {
      // On vérifie que le nombre de page est supérieur ou égale à 1
      if($page < 1){
        // Si non alors on renvoie une page 404
        throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
      }
      // Si oui, on redirige vers l'index
      return $this->render('OCPlatformBundle:Advert:index.html.twig');
    }

    // Affichage des Annonces par id
    public function viewAction($id, Request $request)
    {
      // On retourne l'annonce correspondante à $id
      return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
        'id' => $id
      ));
    }

    // Méthode d'ajout d'annonces
    public function addAction(Request $request)
    {

      // Si on est dans un formulaire (en POST) :
      if($request->isMethod('POST')){
        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
        // Redirection vers la vue de l'annonce créée
        return $this->redirectToRoute('oc_platform_view', array('id' => 5));
      }

      // Si on est pas dans un formulaire (pas POST) :
      // On renvoie vers le formulaire
      return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }

    // Edition d'une annonce par id
    public function editAction($id, Request $request)
    {

      // Même chose que pour l'ajout
      if($request->isMethod('POST')){
        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
        // Redirection vers la vue de l'annonce modifiée
        return $this->redirectToRoute('oc_platform_view', array('id' => 5));
      }

      // Sinon retour vers le formulaire afin d'éditer notre annonce
      return $this->render('OCPlatform:Advert:edit.html.twig');
    }

    // Suppression d'un produit par id
    public function deleteAction($id)
    {
      // Ici, on récupérera l'annonce par id

      // Ici, on gérera la suppression de l'annonce par id

      return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }
}
