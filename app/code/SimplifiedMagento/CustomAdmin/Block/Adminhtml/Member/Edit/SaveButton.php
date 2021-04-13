<?php

declare(strict_types=1);

namespace SimplifiedMagento\CustomAdmin\Block\Adminhtml\Member\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 * @package Magento\Customer\Block\Adminhtml\Edit
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{

    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        if ($this->_isAllowedAction('SimplifiedMagento_CustomAdmin::parent')) {
            $data = [
                'label' => __('Save Member'),
                'class' => 'save primary',
                'data_attribute' => [
                    'mage-init' => ['button' => ['event' => 'save']],
                    'form-role' => 'save',
                ],
                'sort_order' => 90,
            ];
        }
        return $data;
    }
}
