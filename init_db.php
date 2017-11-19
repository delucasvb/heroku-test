<?php

require('vendor/autoload.php');

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

$pdo = new PDO($app['pdo.dsn'], $app['pdo.username'], $app['pdo.password']);

$pdo->exec("CREATE TABLE messages (messageID bigserial PRIMARY KEY, body text, sender text)");
$pdo->exec("INSERT INTO messages (body, sender) VALUES ('Hello, World!', 'myuser@gmail.com')");

foreach ($pdo->query("SELECT * FROM messages") as $row) {
    print $row['messageID'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    print $row['body'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    print $row['sender'] . "<br/>";
}