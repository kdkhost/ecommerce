<?php 

$dir1 = "Diretorio_1";
$dir2 = "Diretorio_2";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("d-m-Y H:i:s"));

    fclose($file);

}

rename($dir1 . DIRECTORY_SEPARATOR . $filename, //origem
$dir2 . DIRECTORY_SEPARATOR . $filename); // destino

echo "Arquivo Movido com sucesso!";
?>