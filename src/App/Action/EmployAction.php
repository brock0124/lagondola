<?php

namespace App\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Expressive\Plates\PlatesRenderer;
use Zend\Expressive\Twig\TwigRenderer;
use Zend\Expressive\ZendView\ZendViewRenderer;

class EmployAction implements ServerMiddlewareInterface
{
    private $router;

    private $template;

    public function __construct(Router\RouterInterface $router, Template\TemplateRendererInterface $template = null)
    {
        $this->router   = $router;
        $this->template = $template;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        include 'Styles.php';

        $data = [];

        $data['nav_bar'] = $nav_bar;

        $data['style'] = $custom_css;

        $data['title'] = "LaGondola Spaghetti House";

        $data['address'] =  "2233 Hawthorne Pl";

        $data['state'] = 'Washington, IL, 61571';


        return new HtmlResponse($this->template->render('app::careers', $data));
    }
}