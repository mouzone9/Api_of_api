<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Hotel;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 0; $i < 10; $i++) {
            $hotel = new Hotel();
            $hotel->setHcomLoacle("es", $i);
            $hotel->setName("hotel");
            $hotel->setPosName("Hcom", $i);

            $manager->persist($hotel);
        }

        $manager->flush();
    }
}
