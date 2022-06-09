<?php

namespace App\Controller\Admin;

use App\Entity\Gite;
use App\Form\GiteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class adminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_index")
     */

    public function index(ManagerRegistry $doctrine)
    {
        $repository = $doctrine->getRepository(Gite::class);
        $gites=$repository->findAll();
        return $this->render("admin/index.html.twig", [
            "menu" => "index_admin",
            "gites"=> $gites
        ]);
    }

    /**
     * @Route("/admin/gite/create", name="admin_gite_create")
     */
    public function create(ManagerRegistry $doctrine, Request $request)
    {
        $gite = new Gite();
        $form = $this->createForm(GiteType::class, $gite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $em = $doctrine->getManager();
            $em->persist($gite);
            $em->flush();
            return $this->redirectToRoute("admin_index");
        }

        // if ($form->) 
        // {

        //     return $this->redirectToRoute("admin_index");
        // }

        return $this->renderForm("admin/gite/create.html.twig", [
            "menu" => null,
            "formGite" => $form
        ]);
    }

}

