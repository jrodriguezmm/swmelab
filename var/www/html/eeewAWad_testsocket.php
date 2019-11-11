<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$connection =  @socket_connect($socket, 'smtp.office365.com', 587);

if( $connection ){
    echo 'ONLINE';
}
else {
    echo 'OFFLINE: ' . socket_strerror(socket_last_error( $socket ));
}

?>