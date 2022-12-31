<?

$config = require "config.php";




$pdo = Connection::make($config['database']);

CreateUsersTable::usersTable($pdo);
CreatePostsTable::postsTable($pdo);


$router = new Router;

require "routes.php";

$router->show('posts');