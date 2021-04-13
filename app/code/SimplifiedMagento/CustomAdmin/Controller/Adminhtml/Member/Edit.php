<?php

declare(strict_types=1);

namespace SimplifiedMagento\CustomAdmin\Controller\Adminhtml\Member;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;

class Edit extends Action
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

    private $resultPageFactory;
    /**
     * @var AffiliateMemberFactory $affiliateMember
     */

    private $affiliateMember;
    /**
     * @var Registry $_coreRegistry
     */

    private $_coreRegistry;

    /**
     * Edit constructor.
     * @param AffiliateMemberFactory $affiliateMember
     * @param Registry $_coreRegistry
     * @param PageFactory $resultPageFactory
     * @param Context $context
     */
    public function __construct(
        AffiliateMemberFactory $affiliateMember,
        Registry $_coreRegistry,
        PageFactory $resultPageFactory,
        Context $context
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->affiliateMember = $affiliateMember;
        $this->_coreRegistry = $_coreRegistry;
    }

    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('id');
//        $model = $this->_objectManager->create('SimplifiedMagento\Database\Model\AffiliateMember');
        $model = $this->affiliateMember->create();

        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This member no longer exists.'));
                /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->_coreRegistry->register('member', $model);
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(
            self::ADMIN_RESOURCE
        )->addBreadcrumb(
            __('Members'),
            __('Members')
        )->addBreadcrumb(
            __('Affiliate Members'),
            __('Affiliate Members')
        )->addBreadcrumb(
            $id ? __('Edit Member') : __('New Member'),
            $id ? __('Edit Member') : __('New Member')
        );
        if ($id) {
            $resultPage->getConfig()->getTitle()->prepend(__('Edit Member'));
        } else {
            $resultPage->getConfig()->getTitle()->prepend(__('Add New Member'));
        }
        return $resultPage;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed(self::ADMIN_RESOURCE);
    }
}
