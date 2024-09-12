<?php

require "./Router.php";
$router = new Router();

$router->get("/test", function () {
    return "hola";
});

$router->post("/per", function () {
    return "amigo";
});

$router->put('/put', function () {
    return "PUT OK";
});
$router->patch('/patch', function () {
    return "PATCH OK";
});
$router->delete('/delete', function () {
    return "DELETE OK";
});

try {
    $action = $router->resolve();
    print($action());
} catch (HttpNotFoundException $e)  {
    print("Not Found");
http_response_code(404);
}
