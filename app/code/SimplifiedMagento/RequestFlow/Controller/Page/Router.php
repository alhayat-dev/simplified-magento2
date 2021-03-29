<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class Router
 * @package SimplifiedMagento\RequestFlow\Controller\Page
 */

namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\RequestInterface;

class Router implements \Magento\Framework\App\RouterInterface
{
    /**
     * @var ActionFactory $actionFactory
     */
    private ActionFactory $actionFactory;

    public function __construct(
        ActionFactory $actionFactory
    ) {
        $this->actionFactory = $actionFactory;
    }

    public function match(RequestInterface $request)
    {
        /* customer/account/login */
        $path = trim($request->getPathInfo(), '/');
        $paths = explode('-', $path);
        $request->setModuleName($paths[0]);
        $request->setControllerName($paths[1]);
        $request->setActionName($paths[2]);
        return $this->actionFactory->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
    }
}
