<?php
namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Controller
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($name)
    {
        return $this->container->get($name);
    }

    public function alert($message, $type = "success")
    {
        if (!isset($_SESSION['alert'])) {
            $_SESSION['alert'] = [];
        }
        return $_SESSION['alert'][$type] = $message;
    }

    public function tokenCheck($token)
    {
        if (!isset($_SESSION['token']) || empty($_SESSION['token'])) {
            return false;
        } elseif ($_SESSION['token'] === $token) {
            return true;
        } else {
            return false;
        }
    }

    public function render(ResponseInterface $response, $file, $params = [])
    {
        $this->container->view->render($response, $file, $params);
    }

    public function redirect(ResponseInterface $response, $name, $status = 302)
    {
        return $response->withStatus($status)->withHeader('Location', $this->router->pathFor($name));
    }
}
