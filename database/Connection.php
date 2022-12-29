<?
class Connection
{

    public static function make($config)
    {
        var_dump($config);
        try {
            return new PDO(
                'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
                $config['user'],
                $config['password']

            );
            // return new PDO("mysql:host=127.0.0.1;dbname=crud", 'root', '');

        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
}
