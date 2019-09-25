<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    public function index()
    {
        $content = random_int(0, 100);

        return $this->render('post/index.html.twig', [
            'content' => $content,
        ]);
    }
}