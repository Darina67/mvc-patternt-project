<?php

namespace App\Controllers;


class DashboardController
{

    public function index()
    {
        return view("index");
    }

    public function create()
    {
        return view("create");
    }

    public function show()
    {
        return view("show");
    }

    public function edit()
    {
        return view("edit");
    }
    public function gallery()
    {
        return view("gallery");
    }
    public function logout()
    {
        echo "logout";
    }
}
