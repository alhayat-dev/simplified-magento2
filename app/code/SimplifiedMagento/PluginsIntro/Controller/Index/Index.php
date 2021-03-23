<?php

/**
 * Class Index
 * @package SimplifiedMagento\Plugins\Controller\Index
 */

namespace SimplifiedMagento\PluginsIntro\Controller\Index;

use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface
{
    /**
     * @var ProductFactory
     */
    private ProductFactory $productFactory;

    public function __construct(
        ProductFactory $productFactory
    ) {
        $this->productFactory = $productFactory;
    }

    public function execute()
    {
        $product = $this->productFactory->create()->load(1);
        $product->getName();
        $productName = $product->setName('Iphone6');
        echo $product->getIdBySku('24-WB04');
//        exit();

    }
}
