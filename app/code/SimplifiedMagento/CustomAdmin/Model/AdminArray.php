<?php

declare(strict_types=1);

namespace SimplifiedMagento\CustomAdmin\Model;

use Magento\Framework\Data\OptionSourceInterface;

class AdminArray implements OptionSourceInterface
{

    public function toOptionArray()
    {
        return [
            ['value'=> 0, 'label' => __('First')],
            ['value'=> 1, 'label' => __('Second')],
            ['value'=> 2, 'label' => __('Third')],
            ['value'=> 3, 'label' => __('Fourth')],
        ];
    }
}
