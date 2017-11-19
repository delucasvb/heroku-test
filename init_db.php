<?php

$dbstr = getenv('DATABASE_URL');
$dbstr = substr("$dbstr", 11);
$dbstrarruser = explode(":", $dbstr);
$dbstrarrport = explode("/", $dbstrarruser[2]);
$dbstrarrhost = explode("@", $dbstrarruser[1]);
$dbpassword = $dbstrarrhost[0];
$dbhost = $dbstrarrhost[1];
$dbport = $dbstrarrport[0];
$dbuser = $dbstrarruser[0];
$dbname = $dbstrarrport[1];
unset($dbstrarrport);
unset($dbstrarruser);
unset($dbstrarrhost);
unset($dbstr);

echo $dbname . " - name<br>";
echo $dbhost . " - host<br>";
echo $dbport . " - port<br>";
echo $dbuser . " - user<br>";
echo $dbpassword . " - passwd<br>";


//$dbopts = parse_url(getenv('DATABASE_URL'));
//$app->register(new Herrera\Pdo\PdoServiceProvider(),
//    array(
//        'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
//        'pdo.username' => $dbopts["user"],
//        'pdo.password' => $dbopts["pass"]
//    )
//);
//
