<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
use Slim\Http\Request;
use Slim\Http\Response;

class Middleware{
    public function __invoke(Request $request, Response $response, $next){
        $response->getBody()->write('BEFORE');
        $response = $next($request, $response);
        $response->getBody()->write('AFTER');

        return $response;
    }
}
