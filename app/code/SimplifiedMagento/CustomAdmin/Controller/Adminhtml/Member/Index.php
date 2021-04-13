<?php

declare(strict_types=1);

namespace SimplifiedMagento\CustomAdmin\Controller\Adminhtml\Member;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'SimplifiedMagento_CustomAdmin::parent';

    /**
     * @var PageFactory $resultPageFactory
     */
    private PageFactory $resultPageFactory;

    /**
     * Index constructor.
     * @param PageFactory $resultPageFactory
     * @param Context $context
     */
    public function __construct(
        PageFactory $resultPageFactory,
        Context $context
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE)
            ->addBreadcrumb(
                __('Members'),
                __('Members')
            )->getConfig()->getTitle()->prepend(__('Affiliate Members'));
        return $resultPage;
    }
}
