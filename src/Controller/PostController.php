<?php

namespace App\Controller;

use App\Service\PostService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @param PostService $postService
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PostService $postService)
    {
        $content = $postService->getPost();

        return $this->render('post/index.html.twig', [
            'content' => $content,
        ]);
    }
}