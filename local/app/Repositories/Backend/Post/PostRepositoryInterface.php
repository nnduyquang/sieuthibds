<?php

namespace App\Repositories\Backend\Post;

interface PostRepositoryInterface
{
    public function getAllPostByTypeOrderById();

    public function showCreatePost();

    public function showEditPost($id);

    public function createNewPost($request);

    public function updatePost($request, $id);

    public function deletePost($id);
}


