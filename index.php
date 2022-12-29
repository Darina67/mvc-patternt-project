<?php

require "database/Connection.php";
require "database/migrations/CreateUser.php";
require "database/migrations/CreatePostsTable.php";



$pdo = Connection::make();

CreateUserTable::usersTable($pdo);
CreatePostsTable::postsTable($pdo);
