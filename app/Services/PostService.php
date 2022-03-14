<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService extends BaseService
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPost()
    {
        return $this->postRepository->getAll()->sortByDesc('created_at');
    }

}
