<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 5/20/2017
 * Time: 2:30 PM
 */

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
use App\Action\MenuObject;

class LocationAction implements ServerMiddlewareInterface
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
        $location = $_GET['location'];
        if($this->checkLocation($location) == 404)
        {
            return new HtmlResponse($this->template->render('error::404'));
        }

        $menu = new MenuObject();

        $data = [];

        $data['location'] = ucfirst($_GET['location']);

        $data['title'] = $data['location'] . " LaGondola";

        $data['menu'] = $menu->getLocationMenu($location);


        return new HtmlResponse($this->template->render('app::location', $data));
    }

    public function checkLocation($location)
    {
        $locations = [
            'peoria',
            'morton',
            'bloomington',
            'pekin',
            'creve cour',
        ];

        if(!in_array($location, $locations)){
            return 404;
        } else {
            return 200;
        }
    }
}