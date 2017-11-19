<?php

$connection = pg_connect("postgres://gbivimzzornefg:a7998d4fcdfe32879d876839c232c901ecdf66dd698abc2a553da17be2e5fc58@ec2-54-217-235-11.eu-west-1.compute.amazonaws.com:5432/d1c2rqml900fac");

$result = pg_query($connection, "SELECT * FROM message");
if (!$result) {
    echo "An error occurred.\n";
    exit;
}

while ($row = pg_fetch_row($result)) {
    echo "Message: $row[0]";
    echo "<br />\n";
}