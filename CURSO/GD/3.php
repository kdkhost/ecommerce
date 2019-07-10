<?php 
    
    $image = imagecreatefromjpeg("certificado.jpg");

    $tituloColor = imagecolorallocate($image, 0, 0, 0);
    $grey = imagecolorallocate($image, 100, 100, 100);

    imagettftext($image, 32, 0, 320, 250, $tituloColor, 
    "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
    imagettftext($image, 32, 0, 375, 350, $tituloColor, 
    "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Marcelo Brad");
    imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $tituloColor);

    header("Content-type: image/jpeg");
    imagejpeg($image);

    imagedestroy($image);

?>