<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

/* $app->get('/{name}', function (Request $request, Response $response, array $args) {
    // Sample log message
    //$this->logger->info("Slim-Skeleton '/' route");
    $name = $args['name'];
    $response->getBody()->write("Hello $name");

    return $response;
    // Render index view
    //return $this->renderer->render($response, 'index.phtml', $args);
}); */

$app->get('/tickets', function(Request $request, Response $response, array $args){
    $this->logger->info("Ticket List");
    $mapper = new TicketMapper($this->db);
    $tickets = $mapper->getTickets();

    $response->getBody()->write(var_export($tickets, true));

    return $response;
});
