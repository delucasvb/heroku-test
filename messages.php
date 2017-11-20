<?php

require("app_start.php");

//foreach ($pdo->query("SELECT * FROM messages") as $row) {
//    print $row['messageID'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
//    print $row['body'] . "&nbsp;&nbsp;&nbsp;&nbsp;";
//    print $row['sender'] . "<br/>";
//}

foreach ($pdo->query("SELECT * FROM messages") as $row)
    print_r($row);