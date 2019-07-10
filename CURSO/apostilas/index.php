<!DOCTYPE html>
<html>
    <title>Apostilas para Concursos</title>
<body>
    <h2>Cursos e Concursos em Andamento</h2>

<?php
//invalid xml file
$xmlfile = 'https://php7.transferenciacpanel.cf/apostilas/lendo_xml.php';
$xmlparser = xml_parser_create();

// open a file and read data
$fp = fopen($xmlfile, 'r');
$xmldata = fread($fp, 4096);

xml_parse_into_struct($xmlparser,$xmldata,$values);

xml_parser_free($xmlparser);

?>
<hr><br>
<div>
    <?php
    //echo json_encode($xmldata);
    var_dump($values);
    ?>
</div>
</body>
</html>