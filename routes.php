<?php

$router->get('', 'DashboardController@index');
$router->get('posts', 'DashboardController@allPosts');
