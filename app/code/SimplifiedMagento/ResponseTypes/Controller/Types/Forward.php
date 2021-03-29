<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class Forward
 * @package SimplifiedMagento\ResponseTypes\Controller\Types
 */


namespace SimplifiedMagento\ResponseTypes\Controller\Types;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RedirectFactory;

class Forward implements ActionInterface
{
    /**
     * @var RedirectFactory $resultRedirectFactory
     */
    private RedirectFactory $resultRedirectFactory;

    /**
     * Forward constructor.
     * @param RedirectFactory $resultRedirectFactory
     */
    public function __construct(
        RedirectFactory $resultRedirectFactory
    ) {

        $this->resultRedirectFactory = $resultRedirectFactory;
    }
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('customer/account/create');
        return $resultRedirect;
    }
}

