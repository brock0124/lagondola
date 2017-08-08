<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 5/27/2017
 * Time: 2:46 PM
 */

namespace App\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class MenuObject implements ServerMiddlewareInterface
{

    private $items = [
        'Spaghetti Dinner' => '9.99',
        'Tortellini Dinner' => '10.99',
    ];

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        return $this->items;
    }

    public function addItem($item, $price)
    {
        $this->items[$item] = $price;
    }

    public function toString()
    {
        $string = "";
        foreach ($this->items as $item => $value) {
            $string .= $item . "   :   "  . $value . "\xA";
        }

        return $string;
    }

    public function peoriaMenu()
    {
        $menu = [
            'Spaghetti Dinner -- $8.99',
            'Tortellini Dinner -- $9.99',
            'Ravioli Dinner -- $10.99',
            'Fresh Bread -- $2.09',
            'Garlic Bread -- $4.99',
            'Cinnamon Bread -- $5.09',
        ];

        return $menu;
    }

    public function getLocationMenu($location)
    {
        $peoria = [
            'Spaghetti Dinner -- $8.99',
            'Tortellini Dinner -- $9.99',
            'Ravioli Dinner -- $10.99',
            'Fresh Bread -- $2.09',
            'Garlic Bread -- $4.99',
            'Cinnamon Bread -- $5.09',
        ];

        $morton = [
            'Spaghetti Dinner -- $9.99',
            'Tortellini Dinner -- $10.99',
            'Ravioli Dinner -- $11.99',
            'Checken Alfredo Dinner -- 12.05',
            'Fresh Bread -- $2.09',
            'Garlic Bread -- $4.99',
            'Cinnamon Bread -- $5.09',
        ];

        $bloomington = [
            'Spaghetti Dinner -- $8.99',
            'Tortellini Dinner -- $9.99',
            'Ravioli Dinner -- $10.99',
            'Fresh Bread -- $2.09',
            'Garlic Bread -- $4.99',
            'Cinnamon Bread -- $5.09',
        ];

        $pekin = [
            'Spaghetti Dinner -- $8.99',
            'Tortellini Dinner -- $9.99',
            'Ravioli Dinner -- $10.99',
            'Fresh Bread -- $2.09',
            'Garlic Bread -- $4.99',
            'Cinnamon Bread -- $5.09',
        ];

        $creve_cour = [
            'Spaghetti Dinner -- $8.99',
            'Tortellini Dinner -- $9.99',
            'Ravioli Dinner -- $10.99',
            'Fresh Bread -- $2.09',
            'Garlic Bread -- $4.99',
            'Cinnamon Bread -- $5.09',
        ];

        switch ($location) {
            case 'peoria':
                return $peoria;
                break;
            case 'morton':
                return $morton;
                break;
            case 'pekin':
                return $pekin;
                break;
            case 'creve_cour':
                return $creve_cour;
                break;
        }
    }
}