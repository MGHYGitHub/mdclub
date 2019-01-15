<?php

declare(strict_types=1);

namespace App\Controller;

use App\Abstracts\ControllerAbstracts;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * 私信
 *
 * Class Inbox
 * @package App\Controller
 */
class Inbox extends ControllerAbstracts
{
    /**
     * 私信列表页
     *
     * @param  Request           $request
     * @param  Response          $response
     * @return ResponseInterface
     */
    public function pageIndex(Request $request, Response $response): ResponseInterface
    {
        return $this->container->view->render($response, '/inbox/index.php');
    }
}