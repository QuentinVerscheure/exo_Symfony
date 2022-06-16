<?php

namespace App\Controller;

use App\Entity\contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Gite;
use App\Entity\GiteSearch;
use App\Form\ContactType;
use App\Form\GiteSearchType;
use App\Notification\ContactNotification;
use Doctrine\Common\Collections\Expr\Value;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class homeController extends AbstractController
{


    /**
     * @Route("/", name="home")
     */
    public function index(ManagerRegistry $doctrine)
    {
       
        $repository = $doctrine->getRepository(Gite::class);
        $gites = $repository->findAll();

        return $this->render("index.html.twig", [
            "menu" => "index",
            "gites" => $gites,
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, ContactNotification $notification)
    {
        $contact = new contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $notification->contactNotify($contact);
            $this->addFlash('succes','email envoyé');
        }

        return $this->render("contact.html.twig", [
            "menu" => "contact",
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/recherche-gite", name="recherche-gite")
     */
    public function rechercheGite(ManagerRegistry $doctrine, Request $request)
    {

        $search = new GiteSearch();
        //creation du formulaire de recherche
        $form = $this->createForm(GiteSearchType::class, $search);
        $form->handleRequest($request);
        

        /** @var GiteRepository $repository */
        $repository = $doctrine->getRepository(Gite::class);
        $gites = $repository->findGiteSearch($search);


        return $this->render("rechercheGite.html.twig", [
            "menu" => "rechercheGite",
            "gites" => $gites,
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/detail-gite", name="detailGite")
     */
    public function detailGite()
    {
        return $this->render("detailGite.html.twig", [
            "menu" => "detailGite",
            "idGite" => "001"
        ]);
    }
}




