<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class CustomNoRouteHandler
 * @package SimplifiedMagento\RequestFlow\Controller\Page
 */

namespace SimplifiedMagento\RequestFlow\Controller\Page;

class CustomNoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $request->setRouteName('noroutefound')->setControllerName('page')->setActionName('customNoRoute');
        return true;
    }
}
