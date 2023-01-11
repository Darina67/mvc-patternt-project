<?php

namespace App\Controllers;

use App\Request;
use App\Models\Post;

class PostsController
{
    public function index()
    {
        $posts = (new Post)->AllPost('posts');
        // dd($posts);

        return view("posts", ['posts' => $posts]);
    }

    public function store()
    {

        $img = Request::file()['thumbnail'];
        $filepath = $img['tmp_name'];

        $imgName = strtolower(str_replace(' ', '-', $img['name']));

        $imgUrl = 'public/assets/thumbnails/' . $imgName;

        move_uploaded_file($filepath, $imgUrl);

        (new Post)->storePost($imgUrl, Request::values());
    }
    public function show()
    {
        $post = (new Post)->showPost('posts', Request::values()['id']);

        return view("show", ['post' => $post]);
    }
    public function delete()
    {
        (new Post)->deletePost('posts', Request::values()['id']);
    }
}
