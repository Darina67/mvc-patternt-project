<?php

namespace App\Models;

class Post
{
    public function storePost($imgUrl, $data)
    {
        $data['thumbnail']  = $imgUrl;

        $query = sprintf(
            "INSERT INTO %s (%s) VALUES(%s)",
            "posts",
            implode(',', array_keys($data)),
            ":" . implode(', :', array_keys($data))
        );
        try {
            $stmt = connect()->prepare($query);
            $stmt->execute($data);

            setSession('success', 'Пост добавлен!');

            header("Location: /posts/create");
        } catch (\Throwable $th) {
            die($th->getMessage());
        }

        // dd($data);
    }
}
