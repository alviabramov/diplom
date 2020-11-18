<?php

namespace App\ContentBundle\Controller;

use App\ContentBundle\Storage\HardStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    /**
     * @return Response
     */
    public function show()
    {
        return $this->render('content/index.html.twig');
    }
}

