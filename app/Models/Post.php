<?php

namespace App\Models;

use PDO;

class Post
{

    public function AllPost($table)
    {
        $query = "SELECT * FROM {$table}";
        try {
            $stmt = connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }

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

            startSession();
            setSession('success', 'Пост добавлен!');

            header("Location: /posts/create");
        } catch (\Throwable $th) {
            die($th->getMessage());
        }

        // dd($data);
    }

    public function showPost($table, $id)
    {
        $query = "SELECT * FROM {$table} WHERE id=?";
        $stmt = connect()->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function deletePost($table, $id)
    {
        $query = "DELETE  FROM {$table} WHERE posts.id=?";
        try {
            $stmt = connect()->prepare($query);
            $stmt->execute([$id]);

            startSession();
            setSession('deleted', 'Пост удален!');

            header("Location: /posts");
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
}
