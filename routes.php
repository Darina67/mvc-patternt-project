<?php

$router->get('main', 'DashboardController@index');
$router->get('posts/create', 'DashboardController@create');
$router->get('posts/edit', 'DashboardController@edit');
$router->get('gallery', 'DashboardController@gallery');
$router->post('logout', 'DashboardController@logout');



$router->get('posts', 'PostsController@index');
$router->post('posts/store', 'PostsController@store');
$router->get('posts/view', 'PostsController@show');
$router->post('posts/delete', 'PostsController@delete');
