<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Producto;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $lorem_ipsum = "Lorem ipsum dolor sit amet consectetur, adipiscing elit aptent ridiculus elementum lacus, tempus condimentum tristique scelerisque";
        $product = new Producto();
        $product->setName('Dance1');
        $product->setPrice(mt_rand(5, 50));
        $product->setImage('dance1.jpg');
        $product->setDescription($lorem_ipsum);
        $product->setType("Foto");

        $manager->persist($product);

        $product = new Producto();
        $product->setName('Bird');
        $product->setPrice(mt_rand(5, 50));
        $product->setImage('bird2.jpg');
        $product->setDescription($lorem_ipsum);
        $product->setType("Foto");

        $manager->persist($product);


        $product = new Producto();
        $product->setName('Hunter');
        $product->setPrice(mt_rand(5, 50));
        $product->setImage('hunter.jpg');
        $product->setDescription($lorem_ipsum);
        $product->setType("Foto");

        $manager->persist($product);

        $product = new Producto();
        $product->setName('Love');
        $product->setPrice(mt_rand(5, 50));
        $product->setImage('love.jpg');
        $product->setDescription($lorem_ipsum);
        $product->setType("Foto");

        $manager->persist($product);

        $product = new Producto();
        $product->setName('Camera');
        $product->setPrice(mt_rand(5, 50));
        $product->setImage('camera.jpg');
        $product->setDescription($lorem_ipsum);
        $product->setType("Foto");

        $manager->persist($product);

        $product = new Producto();
        $product->setName('Horses');
        $product->setPrice(mt_rand(5, 50));
        $product->setImage('horses.jpg');
        $product->setDescription($lorem_ipsum);
        $product->setType("Foto");

        $manager->persist($product);

        $product = new Producto();
        $product->setName('Volcan');
        $product->setPrice(mt_rand(5, 50));
        $product->setImage('volcan.jpg ');
        $product->setDescription($lorem_ipsum);
        $product->setType("Foto");

        $manager->persist($product);

        $product = new Producto();
        $product->setName('Orca');
        $product->setPrice(mt_rand(5, 50));
        $product->setImage('orca.jpg');
        $product->setDescription($lorem_ipsum);
        $product->setType("Foto");

        $manager->persist($product);





        $manager->flush();
    }
}
