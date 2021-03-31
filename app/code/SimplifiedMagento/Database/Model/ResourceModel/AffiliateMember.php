<?php

declare(strict_types=1);

namespace SimplifiedMagento\Database\Model\ResourceModel;

class AffiliateMember extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('affiliate_members', 'entity_id');
    }
}
