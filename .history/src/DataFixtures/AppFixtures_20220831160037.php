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
                $article->setExcerpt('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mi diam...');
                $article->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mi diam, elementum eu tincidunt a, condimentum sit amet risus. Proin volutpat, leo quis euismod gravida, dolor dolor mollis augue, eu efficitur leo sem eu dolor. Nam volutpat, risus eu bibendum tincidunt, leo sapien congue turpis, ac tincidunt turpis metus sit amet est. In auctor vulputate suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis feugiat quam eget urna varius lobortis. Integer neque risus, viverra vitae libero in, dignissim varius nisl. Nunc ullamcorper aliquam efficitur. Integer porta elit condimentum nibh facilisis vestibulum. Fusce laoreet vitae nulla vitae pretium.');
                $manager->persist($article);
            }
        $manager->flush();
    }
}
