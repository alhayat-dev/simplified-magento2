<?php

/**
 * Class PluginSolution
 * @package SimplifiedMagento\PluginsIntro\Plugin
 */

namespace SimplifiedMagento\PluginsIntro\Plugin;

use Magento\Catalog\Model\Product;

class PluginSolution
{
//    /**
//     * @param Product $subject
//     * @param $name
//     * @return string
//     */
//    public function beforeSetName(
//        Product $subject,
//        $name
//    ) {
//        return "Before plugin - " . $name;
//    }
//
//    /**
//     * @param Product $subject
//     * @param $result
//     * @return string
//     */
//    public function afterGetName(
//        Product $subject,
//        $result
//    ) {
//        return $result . " - After plugin ";
//    }

    public function aroundGetIdBySku(Product $subject, callable $proceed, $sku)
    {
        echo "Before Proceed" . PHP_EOL;
        $id = $proceed($sku);
        echo $id . PHP_EOL;
        echo "After Proceed" . PHP_EOL;
        return $id;
    }

    public function aroundGetName(Product $subject, callable $proceed)
    {
        echo "Before Proceed" . PHP_EOL;
        $name = $proceed();
        echo $name . PHP_EOL;
        echo "After Proceed" . PHP_EOL;
        return $name;
    }
}
