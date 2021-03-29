<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class Redirect
 * @package SimplifiedMagento\ResponseTypes\Controller\Types
 */

namespace SimplifiedMagento\ResponseTypes\Controller\Types;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;

class Redirect implements ActionInterface
{
    /**
     * @var RedirectFactory $resultRedirectFactory
     */
    private RedirectFactory $resultRedirectFactory;

    public function __construct(
        RedirectFactory $resultRedirectFactory
    ) {
        $this->resultRedirectFactory = $resultRedirectFactory;
    }

    public function execute()
    {
        return $this->resultRedirectFactory->create()->setPath('customer/account/create');
    }
}
