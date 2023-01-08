<?php

class DashboardController
{

    public function index()
    {
        return view("index");
    }

    public function allPosts()
    {
        return view("posts");
    }
}