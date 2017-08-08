<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 7/22/2017
 * Time: 11:38 AM
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
use Zend\Mail;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;
use Zend\Mime\Mime;

class ContactAction implements ServerMiddlewareInterface
{
    private $router;

    private $template;

    public function __construct(Router\RouterInterface $router, Template\TemplateRendererInterface $template = null)
    {
        $this->router = $router;
        $this->template = $template;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $data = $request->getParsedBody();
        $transport = new SmtpTransport();

        $endOfMessage = $data['message'] . '<br><br>Please do no reply to this message.  Reply by copying and 
pasting the email address below into a new email. Not creating a new message will not send it to the customer.
<br>' . $data['email'];

        $bodyPart = new \Zend\Mime\Message();

        $bodyMessage = new \Zend\Mime\Part($endOfMessage);
        $bodyMessage->type = 'text/html';

        $bodyPart->setParts(array($bodyMessage));


        //Developer SMTP Options
        /*$options = new SmtpOptions([
            'name' => 'srv-16.caldwell.local',
            'host' => '192.168.1.17',
            'port' => 1025
        ]);*/

        //Production SMTP Options
        /*$options = new SmtpOptions([
            'name' => 'gmail.com',
            'host' => 'smtp.gmail.com',
            'connection_class' => 'login',
            'port' => 465,
            'connection_config' => [
                'username' => 'lagondolaspaghettihouse@gmail.com',
                //RE-INSERT PASSWORD BEFORE BEGINNING
                'ssl' => 'ssl',
            ],
        ]);*/

        $transport->setOptions($options);

        $message = new Mail\Message();

        $message->setBody($bodyPart);
        $message->setFrom($data['email']);
        $message->addTo('lagondolaspaghettihouse@gmail.com');
        $message->setSubject($data['location'] . " - Customer Email");
        $message->addReplyTo($data['email']);
        $transport->send($message);


        return new HtmlResponse($this->template->render('app::index', $data));
    }
}
