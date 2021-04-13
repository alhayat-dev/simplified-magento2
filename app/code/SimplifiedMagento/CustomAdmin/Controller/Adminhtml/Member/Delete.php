<?php

declare(strict_types=1);

namespace SimplifiedMagento\CustomAdmin\Controller\Adminhtml\Member;

class Delete extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'SimplifiedMagento_CustomAdmin::parent';

    /**
     * Delete Banner
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        // check if we know what should be deleted
        $memberId = (int)$this->getRequest()->getParam('id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($memberId && (int) $memberId > 0) {
            try {
                $model = $this->_objectManager->create('SimplifiedMagento\Database\Model\AffiliateMember');
                $model->load($memberId);
                $model->delete();
                $this->messageManager->addSuccessMessage(__('The Member has been deleted successfully.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to the question grid
                return $resultRedirect->setPath('*/*/index');
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('Member doesn\'t exist any longer.'));
        // go to the question grid
        return $resultRedirect->setPath('*/*/index');
    }
}
