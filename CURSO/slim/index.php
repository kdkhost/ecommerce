<?php 
    require_once("../composer/vendor/autoload.php");

    // Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Define app routes
$app->get('/', function(){
    echo json_encode(array(
        'Data'=>date('d-m-Y H:i:s'),
        'Versão PHP'=> PHP_VERSION
    ));
});
$app->get('../hello/{name}', function ($request, $response, $args) {
    return $response->write("Hello " . $args['name']);
});

// Run app
$app->run();

?>