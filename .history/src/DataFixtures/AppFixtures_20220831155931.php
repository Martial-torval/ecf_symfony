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
                $product->setExcept('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mi diam...');
                $manager->s($product);
            }
    
            $manager->flush();
        }

        $manager->flush();
    }
}
