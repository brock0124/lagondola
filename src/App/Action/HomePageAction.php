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

class HomePageAction implements ServerMiddlewareInterface
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

        $data['style'] = $custom_css;

        $data['nav_bar'] = $nav_bar;

        $data['title'] = "LaGondola Spaghetti House";

        $data['address'] =  "2233 Hawthorne Pl";

        $data['state'] = 'Washington, IL, 61571';

        $data['about'] = "Established in 1982, LaGondola Spaghetti House was based on the founder’s simple belief in 
        homemade food and excellent service. For over 35 years, nothing has changed. Wholesome ingredients prepared 
        fresh everyday—from our hot made-from-scratch bread to our signature meat sauce. To us, freshness is everything.
A great poet once said: “If you bake bread with indifference, you bake a bitter bread that feeds but half of man’s 
hunger.” With that in mind, our 13 family restaurants have become distinguished by their dedication to one basic 
concept—no shortcuts. As a result, our most valued patrons have long enjoyed authentic Italian tastes, friendly familiar 
smiles, and incomparable customer value.
We at LaGondola Spaghetti House are continuing to build upon our rich family Heritage, which for over 35 years still 
makes us ... The Best Deal in Town.
";
    return new HtmlResponse($this->template->render('app::index', $data));
    }
}
