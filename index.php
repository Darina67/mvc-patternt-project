<?php

require "database/Connection.php";
require "database/migrations/CreateUser.php";


$pdo = Connection::make();

CreateUserTable::UsersTable($pdo);
