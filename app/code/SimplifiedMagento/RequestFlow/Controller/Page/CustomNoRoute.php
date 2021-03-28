<?php

/**
 * Class CustomNoRoute
 * @package SimplifiedMagento\RequestFlow\Controller\Page
 */


namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;

class CustomNoRoute implements ActionInterface
{

    public function execute()
    {
        echo "Custom 404 page.";
        exit();
    }
}
