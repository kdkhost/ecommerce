<?php 
    $email = $_POST["inputEmail"];
    //var_dump($_POST);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        "secret"=>"6LeaQawUAAAAAAEABMKormW16Q9r7vTnrDB4IFGO",
        "response"=>$_POST["g-recaptcha-response"],
        "remoteip"=>$_SERVER["REMOTE_ADD"]
    )));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $recaptcha = json_decode(curl_exec($ch), true);

    curl_close($ch);

    if ($recaptcha["sussess"] === true) {
        echo "OK: ".$POST["inputEmail"];
    } else {
        header("location: 4.php");
    }
?>