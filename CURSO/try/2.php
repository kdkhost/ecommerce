<?php 
// tratando erros exeption
    function trataNome($nome){
        if (!$nome){
            throw new Exception("Nenhum Nome foi informado.", 1);
            
        }
        echo ucfirst($nome). "<br>";
    }

    try {
        trataNome("Marcelo");
        trataNome("");
    } catch (Exception $e){
        echo $e->getMessage();
    } finally {
        echo "<br/>";
        echo "Executou o try";
    }

?>