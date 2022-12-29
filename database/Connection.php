<?
class Connection
{
    // const USER = "root";
    // const PASS = "";
    // const HOST = "localhost";
    // const DB = "example";

    public static function make()
    {
        // $user = self::USER;
        // $pass = self::PASS;
        // $host = self::HOST;
        // $db = self::DB;
        // $pdo = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        // return $pdo;
        try {
            return new PDO("mysql:host=127.0.0.1;dbname=crud", 'root', '');
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
}
