<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       
            for ($i = 0; $i < 20; $i++) {
                $article = new Articles();
                $product->setName('product '.$i);
                $product->setPrice(mt_rand(10, 100));
                $manager->persist($product);
            }
    
            $manager->flush();
        }

        $manager->flush();
    }
}
