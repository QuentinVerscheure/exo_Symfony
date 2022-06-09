<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Gite;
use Doctrine\Persistence\ManagerRegistry;

class homeController extends AbstractController
{


    /**
     * @Route("/", name="home")
     */
    public function index(ManagerRegistry $doctrine)
    {

        $repository = $doctrine->getRepository(Gite::class);

        $gites = $repository->findAll();

        // dump($gite);

        // $manager = $doctrine->getManager();

        // $gite = new Gite();
        // $gite
        //         ->setname("mon 1er gite")
        //         ->setdescription("mon 1er gite description")
        //         ->setcontact("mon 1er gite contact")
        //         ->setscheduleContact("horaire de contact")
        //         ->setlocalisation("mon 1er gite localisation")
        //         ->setsurface(150,36)
        //         ->setnumberOfBedroom(3)
        //         ->setnumberOfBed(5)
        //         ->setequipement("four, cuisinière, barbecue")
        //         ->setPets(true);

        // $manager->persist($gite);

        // $manager->flush();

        return $this->render("index.html.twig", [
            "menu" => "index",
            "gites" => $gites
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render("contact.html.twig", [
            "menu" => "contact",
        ]);
    }

    /**
     * @Route("/recherche-gite", name="recherche-gite")
     */
    public function rechercheGite()
    {
        return $this->render("rechercheGite.html.twig", [
            "menu" => "rechercheGite",
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
