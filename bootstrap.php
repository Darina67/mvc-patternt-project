<?

// $config = require "config.php";

App::bind('config', require "config.php");

// App::get('config');

$pdo = Connection::make(App::get('config') ['database']);

CreateUsersTable::usersTable($pdo);
CreatePostsTable::postsTable($pdo);



Router::load("routes.php")
    ->show( Request::uri(), Request::method());
   
    function view($view, $data=null){
        require "views/{$view}.view.php";
    }
