<?php

namespace App\DataFixtures;

use App\Entity\Equipement;
use App\Entity\Gite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GiteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        for ($i=0; $i < 20; $i++) { 

            $randomPictureNumber = random_int(1,5);
            $setPicture="";
            for ($j=0; $j < $randomPictureNumber; $j++) {
                $setPicture .= "picture(" . random_int(1,68) . ")";
                $setPicture .= ",";
            }

            $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a est sem. Cras finibus velit ac sem varius ultricies. Curabitur aliquet lacus metus, et dictum orci faucibus ut. Curabitur suscipit vel leo sit amet efficitur. Morbi nec cursus risus, a finibus dui. Aliquam mollis nisl a porttitor pellentesque. Etiam tincidunt vestibulum tempus.";

            $gite = new Gite();
            $gite
                ->setName("gite" . $i)
                ->setDescription("description gite n°". $i . $description )
                ->setContact("contact gite n°" . $i)
                ->setScheduleContact("horaire gite n°" . $i)
                ->setLocalisation("localisation gite n°" . $i)
                ->setSurface(random_int(30,300))
                ->setNumberOfBedroom(random_int(1,5))
                ->setNumberOfBed(random_int(1,7))
                ->setPets((bool)rand(0,1))
                ->setPicture($setPicture);
                $manager->persist($gite);
        }

        $manager->flush();
    }
}
