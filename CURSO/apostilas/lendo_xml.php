<?php 

    $url = 'https://www.apostilasopcao.com.br/xml/abertos/4639';
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, false);

    $dados = curl_exec($curl);
    curl_close($curl);

    if($dados == 'Unauthorized'){
    echo "não autorizado";
    }
    
    
?>