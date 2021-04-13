<?php

declare(strict_types=1);

namespace SimplifiedMagento\CustomAdmin\Model\Member\Source;

use Magento\Framework\Data\OptionSourceInterface;
use SimplifiedMagento\Database\Model\AffiliateMember;

class Status implements OptionSourceInterface
{
    /**
     * @var AffiliateMember $affiliateMember
     */
    protected $affiliateMember;

    /**
     * Constructor
     *
     * @param AffiliateMember $affiliateMember
     */
    public function __construct(
        AffiliateMember $affiliateMember
    ) {
        $this->affiliateMember = $affiliateMember;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->affiliateMember->getAvailableStatuses();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}
