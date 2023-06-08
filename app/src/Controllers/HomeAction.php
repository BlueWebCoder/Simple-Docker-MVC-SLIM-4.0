<?php

namespace App\src\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;
use Slim\Psr7\Response as PsrResponse;
use Throwable;


final class HomeAction
{

    /**
     * @throws Throwable
     */
    public function __invoke(Request $request, Response $response): Response
    {
        $renderer = new PhpRenderer('./app/src/Templates');

        return $renderer->render(new PsrResponse(), "login.php", []);
    }
}
