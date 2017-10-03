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
use App\Action\StoreObject;
use App\Action\StoreInformation;

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
        include 'Styles.php';

        $location = strtolower($_GET['location']);
        if($this->checkLocation($location) == 404)
        {
            return new HtmlResponse($this->template->render('error::404'));
        }

        $store = new StoreInformation;
        $store = $store->createStore($location);
        //die(var_dump($store));

        $data = [];

        $data['nav_bar_top'] = $locations_css_top;

        $data['nav_bar_bottom'] = $locations_css_bottom;

        $data['style'] = $custom_css;

        $data['location'] = ucfirst($_GET['location']);

        $data['title'] = $store->getTitle();

        $data['address'] = $store->getAddress();

        $data['state'] = $store->getState();

        $data['phone'] = $store->getPhone();

        $data['hours'] = $store->getHours();

        $data['map'] = $store->getMap();

        $data['pics'] = strtolower($_GET['location']);

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