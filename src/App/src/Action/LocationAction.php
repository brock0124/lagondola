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
        //die(var_dump($request->getUri()));

        $location = strtolower($_GET['location']);
        if($this->checkLocation($location) == 404)
        {
            return new HtmlResponse($this->template->render('error::404'));
        }

        $data = [];

        $data['location'] = ucfirst($_GET['location']);

        $data['title'] = $data['location'] . " LaGondola";

        $data['address'] =  "700 E War Memorial Dr";

        $data['state'] = 'Peoria, IL 61614';

        $data['phone'] = '(309) 688.0800';

        $data['hours'] = $this->getHours($location);

        $data['map'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.1141146900213!2d-89.65395138508984!3d40.64941484937986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880a5f6dd87af4f9%3A0x63f11ab7059be4a!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498941810290" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';

        //$data['menu'] = $menu->getLocationMenu($location);


        return new HtmlResponse($this->template->render('app::locations', $data));
    }

    public function checkLocation($location)
    {
        $locations = [
            'peoria',
            'morton',
            'bloomington-vernon',
            'bloomington-main',
            'pekin',
            'creve-couer',
            'bartonville',
            'chillicothe',
            'galesburg',
            'kewanee',
            'quincy',
        ];

        if(!in_array($location, $locations)){
            return 404;
        } else {
            return 200;
        }
    }

    public function getHours($location)
    {
        switch ($location) {
            case 'peoria':
                return "Mon - Sat: 11am - 9pm";
                break;
            case 'morton':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case "cake":
                echo "i is cake";
                break;
        }
    }
}