<?php 

    session_start();

//apos verificar login e senha reiniciar o ID
    session_destroy();

    session_start();

    session_regenerate_id();

    echo session_id();

?>