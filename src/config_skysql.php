<?php
// MariaDB SkySQL connection (example) settings
$databaseHost = 'transactions-1.mdb0009999.db.skysql.net';
$databasePort = '5002';
$databaseUsername = '*********';
$databasePassword = 'ywjBYqdc%BlGAi6Dr]9SbebPZ';
$databaseName = 'rolodex';
$ssl_pem = "/path/to/skysql_chain.pem";

$mysqli = mysqli_init();
if (!$mysqli) {
    die('mysqli_init failed');
}

mysqli_options($mysqli, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);

$mysqli->ssl_set(
    null,
    null,
    $ssl_pem,
    null,
    null
);

if (!$mysqli->real_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName, $databasePort, null, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT)) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
?>
