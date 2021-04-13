<?php

declare(strict_types=1);

namespace SimplifiedMagento\CustomAdmin\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Index implements ActionInterface
{
    /**
     * @var ScopeConfigInterface $scopeConfig
     */
    private ScopeConfigInterface $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function execute()
    {
        echo $this->scopeConfig->getValue('first_section/first_group/first_field', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        exit();
    }
}
