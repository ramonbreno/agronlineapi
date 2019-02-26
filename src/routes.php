<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/error/{name}', function (Request $request, Response $response, array $args) {
    // Sample log message
    //$this->logger->info("Slim-Skeleton '/' route");
    $name = $args['name'];
    $response->getBody()->write("Hello $name");

    return $response;
    // Render index view
    //return $this->renderer->render($response, 'index.phtml', $args);
})->add( new Middleware() );

/* $app->get('/tickets', function(Request $request, Response $response, array $args){
    $this->logger->info("Ticket list");
    $mapper = new TicketMapper(); //$this->ticketMapper; para caso haja container

    $tickets = $mapper->getTickets();
    //$response = $this->view->render($response, "tickets.phtml", ["tickets" => $tickets, "router" => $this->router]); para caso seja configurado no container
    $response->getBody()->write(var_export($tickets, true));
    
    return $response;
}); */
$app->get('/psr',function(Request $request, Response $response, array $args){
    return $response->withHeader('Content-Type','application/json');

})->add( new Middleware );
