<?php

$router->get('', 'DashboardController@index');
// $router->get('posts', 'DashboardController@allPosts');
$router->get('posts/create', 'DashboardController@create');
// $router->get('posts/view', 'DashboardController@show');
$router->get('posts/edit', 'DashboardController@edit');
// $router->post('posts/delete', 'DashboardController@delete');

$router->get('posts', 'PostsController@index');
$router->post('posts/store', 'PostsController@store');
$router->get('posts/view', 'PostsController@show');
$router->post('posts/delete', 'PostsController@delete');
