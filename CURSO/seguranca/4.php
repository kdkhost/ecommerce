<?php 
$key = "6LeaQawUAAAAADYzC5TYo2XhPODFPgqQZqQKNmre";
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<form action="cadastrar.php" method="post">
    <input type="email" name="inputEmail">
    <button type="submit">Enviar</button>
    <br> <br>
    <div class="g-recaptcha" data-sitekey="<?php echo $key ?>"></div>

</form>