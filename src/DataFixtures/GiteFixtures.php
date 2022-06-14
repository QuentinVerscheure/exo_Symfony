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
        for ($i=0; $i < 30; $i++) { 
            $gite = new Gite();
            $gite
                ->setName("gite" . $i)
                ->setDescription("description gite n°" . $i)
                ->setContact("contact gite n°" . $i)
                ->setScheduleContact("horaire gite n°" . $i)
                ->setLocalisation("localisation gite n°" . $i)
                ->setSurface(random_int(30,300))
                ->setNumberOfBedroom(random_int(1,5))
                ->setNumberOfBed(random_int(1,7))
                ->setPets(true);

                $manager->persist($gite);
        }

        $manager->flush();
    }
}
