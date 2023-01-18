<?php

$router->get('', 'AuthorizationController@index');
$router->post('login/session', 'AuthorizationController@signin');

$router->get('main', 'DashboardController@index'); // +
$router->get('main/gallery', 'DashboardController@gallery'); // +
// $router->get('posts', 'DashboardController@allPosts');
$router->get('main/posts/create', 'DashboardController@create'); // +
// $router->get('posts/view', 'DashboardController@show');
$router->get('main/posts/edit', 'DashboardController@edit');
// $router->post('posts/delete', 'DashboardController@delete');
$router->post('main/logout', 'DashboardController@logout');


$router->get('main/posts', 'PostsController@index'); // +
$router->post('main/posts/store', 'PostsController@store'); // +
$router->get('main/posts/view', 'PostsController@show'); // +
$router->post('main/posts/delete', 'PostsController@delete'); // +
