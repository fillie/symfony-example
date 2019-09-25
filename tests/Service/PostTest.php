<?php

namespace App\Tests\Service;

use App\Service\PostService;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function testPost()
    {
        $postService = new PostService();
        $this->assertEquals('This is a post.', $postService->getPost());
    }
}