<?php

require("app_start.php");

$pdo = new PDO($app['pdo.dsn'], $app['pdo.username'], $app['pdo.password']);

$pdo->exec("CREATE TABLE messages (messageID bigserial PRIMARY KEY, body text, sender text)");
$pdo->exec("INSERT INTO messages (body, sender) VALUES ('Hello, World!', 'myuser@gmail.com')");