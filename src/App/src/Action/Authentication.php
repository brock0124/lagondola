<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 6/3/2017
 * Time: 2:24 PM
 */

namespace App\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class Authentication implements ServerMiddlewareInterface
{
    private $USER = 'bcaldwell';
    private $PASS = '2460wt1PUVnA.';
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $username = $request->getAttribute('username');
        $password = $request->getAttribute('pass');

        if(!hash_equals(getPass(), $password) || !getUser() == $username){
            return new HtmlResponse('error::404');
        } else if (hash_equals(getPass(), $password) && getUser() == $username) {
            $delegate->process();
        }
    }

    private function getPass()
    {
        return $this->PASS;
    }

    private function getUser()
    {
        return $this->USER;
    }
}