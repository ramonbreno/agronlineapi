<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
use Slim\Http\Request;
use Slim\Http\Response;
//use Callable;

class Middleware{
    public function __invoke(Request $request, Response $response, $next){
        $request->getBody()->write('BEFORE');
        $response = $next($request, $response);
        $request->getBody()->write('AFTER');

        return $response;
    }
}
