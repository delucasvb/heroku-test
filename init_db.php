<?php

require("app_start.php");

$pdo->exec("CREATE TABLE messages (messageID bigserial PRIMARY KEY, body text, sender text)");
$pdo->exec("INSERT INTO messages (body, sender) VALUES ('Hello, World!', 'myuser@gmail.com')");