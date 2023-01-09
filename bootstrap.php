<?

use App\{Router, Request};


CreateUsersTable::usersTable(connect());
CreatePostsTable::postsTable(connect());



Router::load("routes.php")
    ->show(Request::uri(), Request::method());
