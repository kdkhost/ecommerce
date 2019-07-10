<?php 

    $id = (isset($_GET["id"]))?$_GET["id"]:5;

    if (!is_numeric($id) || strlen($id) > 4) {
        exit("Não foi concluida a injeção!");
    }

    require_once("config/config.php");

    $sql = "SELECT * FROM tb_usuarios WHERE id = $id";

    $exec = mysqli_query($conn, $sql);

    while ($resultado = mysqli_fetch_object($exec)) {
        var_dump($resultado);
    }

?>