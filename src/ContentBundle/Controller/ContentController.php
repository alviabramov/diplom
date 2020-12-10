<?php

namespace App\ContentBundle\Controller;

use App\Common\Entity\Content;
use App\ContentBundle\Storage\HardStorage;
use App\ContentBundle\Storage\StorageInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    /**
     * @var
     */
    private $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage=$storage;
    }
    
    /**
     * @return Response
     */
    public function show(): Response
    {
        $index = $this->getDoctrine()
            ->getRepository(Content::class)
            ->findAllCategory('index');

        $world = $this->getDoctrine()
            ->getRepository(Content::class)
            ->findAllCategory('world');

        $sport = $this->getDoctrine()
            ->getRepository(Content::class)
            ->findAllCategory('sport');

        $auto = $this->getDoctrine()
            ->getRepository(Content::class)
            ->findAllCategory('auto');

        $gadgets = $this->getDoctrine()
            ->getRepository(Content::class)
            ->findAllCategory('gadgets');


        return $this->render('content/index.html.twig', [
            'index' => $index,
            'world' => $world,
            'sport' => $sport,
            'auto' => $auto,
            'gadgets' => $gadgets,
            ]);
    }

}


