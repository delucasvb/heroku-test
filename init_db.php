<?php

use Herrera\Pdo\PdoServiceProvider;
use Silex\Application;

$dbopts = parse_url(getenv('DATABASE_URL'));
$app = new Application();

$app->register(new PdoServiceProvider(),
    array(
        'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
        'pdo.username' => $dbopts["user"],
        'pdo.password' => $dbopts["pass"]
    )
);

$host = $app['pdo.dsn.host'];
$dbname = $app['pdo.dsn.mysql:dbname'];
$user = $app['pdo.username'];
$pass = $app['pdo.password'];

$pdo = new PDO("mysql:host='.$host.'; dbname='.$dbname.';", $user, $pass);
