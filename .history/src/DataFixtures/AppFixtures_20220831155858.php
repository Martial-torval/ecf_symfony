<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       
            for ($i = 0; $i < 20; $i++) {
                $nbrArticle = 1;
                $article = new Articles();
                $article->setTitle('Article numéro '.$nbrArticle);
                $product->setExcept('Résumé');
                $manager->persist($product);
            }
    
            $manager->flush();
        }

        $manager->flush();
    }
}
