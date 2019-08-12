<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Producto;

class ListaProductosController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('lista_productos/index.html.twig', [
            'controller_name' => 'ListaProductosController',
        ]);
    }

    /**
     * @Route("/home", name="home2")
     */
    public function index2()
    {
        return $this->render('lista_productos/index.html.twig', [
            'controller_name' => 'ListaProductosController',
        ]);
    }

    /**
     * @Route("/listar_productos", name="listar_productos")
     */
    public function listar_productos()
    {
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository(Producto::class)->findAll();

        $list = array();

        foreach ($productos as $unproducto) {
            $list[] = [
                'id' => $unproducto->getId(),
                'name' =>$unproducto->getName(),
                'img' => $unproducto->getImage(),
                'price' => $unproducto->getPrice(),
                'description' => $unproducto->getDescription()
            ];
        }

        return $this->json($list, Response::HTTP_OK);

    }
}
