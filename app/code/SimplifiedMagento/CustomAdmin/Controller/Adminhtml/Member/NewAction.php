<?php

declare(strict_types=1);

namespace SimplifiedMagento\CustomAdmin\Controller\Adminhtml\Member;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\ForwardFactory;

class NewAction extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'SimplifiedMagento_CustomAdmin::parent';

    /**
     * @var ForwardFactory $resultForwardFactory
     */
    private $resultForwardFactory;

    /**
     * NewAction constructor.
     * @param ForwardFactory $resultForwardFactory
     * @param Context $context
     */
    public function __construct(
        ForwardFactory $resultForwardFactory,
        Context $context
    ) {
        parent::__construct($context);
        $this->resultForwardFactory = $resultForwardFactory;
    }

    /**
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Forward $resultForward */
        $resultForward = $this->resultForwardFactory->create();
        return $resultForward->forward('edit');
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed(self::ADMIN_RESOURCE);
    }
}
