<?php

namespace App\Controller;

use App\Entity\Post;
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
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}