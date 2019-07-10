<?php
// criando cookies
    $data = array(
        "empresa"=>"kdkhost hospedagens"
    );

    setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

    echo "Ok";

?>