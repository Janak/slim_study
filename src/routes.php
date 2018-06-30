<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $data = $request->getParsedBody();
    $tickets = new TicketMapper($this->db);

    $this->logger->addInfo('Something interesting happened');
    $response = $this->view->render($response, 'tickets.phtml', ['tickets' => $tickets->getTickets()]);
    return $response;
});
