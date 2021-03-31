<?php

declare(strict_types=1);

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractModel;

class AffiliateMember extends AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\AffiliateMember::class);
    }
}
