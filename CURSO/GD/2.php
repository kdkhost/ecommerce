<?php 
    
    $image = imagecreatefromjpeg("certificado.jpg");

    $tituloColor = imagecolorallocate($image, 0, 0, 0);
    $grey = imagecolorallocate($image, 100, 100, 100);

    imagestring($image, 5, 450, 150, "CERTIFICADO", $tituloColor);
    imagestring($image, 5, 440, 350, "Marcelo Brad", $tituloColor);
    imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $tituloColor);

    header("Content-type: image/jpeg");
imagejpeg($image, "certificado-".date("d-m-Y").".jpg", 20 ); //** o 20 no final é a Qualidade grafica */

    imagedestroy($image);

?>