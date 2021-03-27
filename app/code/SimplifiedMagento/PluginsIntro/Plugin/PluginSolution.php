<?php

/**
 * Class PluginSolution
 * @package SimplifiedMagento\PluginsIntro\Plugin
 */

namespace SimplifiedMagento\PluginsIntro\Plugin;

use Magento\Catalog\Model\Product;

class PluginSolution
{
    public function beforeExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject
    ) {
        echo "Before execute sort order is 10" . PHP_EOL;
    }

    public function afterExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject,
        $result
    ) {
        echo "After execute sort order is 10" . PHP_EOL;
        return $result;
    }

    public function aroundExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject,
        callable $proceed
    ) {
        echo "Before proceed sort order is 10" . PHP_EOL;
        $proceed();
        echo "After proceed sort order is 10" . PHP_EOL;
    }




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
