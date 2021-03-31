<?php

declare(strict_types=1);

namespace SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use SimplifiedMagento\Database\Model\AffiliateMember;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(AffiliateMember::class, AffiliateMemberResourceModel::class);
    }
}
