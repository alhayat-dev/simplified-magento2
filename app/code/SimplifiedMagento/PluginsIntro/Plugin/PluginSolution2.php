<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class PluginSolution2
 * @package SimplifiedMagento\PluginsIntro\Plugin
 */


namespace SimplifiedMagento\PluginsIntro\Plugin;

class PluginSolution2
{
    public function beforeExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject
    ) {
        echo "Before execute sort order is 20" . PHP_EOL;
    }

    public function afterExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject,
        $result
    ) {
        echo "After execute sort order is 20" . PHP_EOL;
        return $result;
    }

    public function aroundExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject,
        callable $proceed
    ) {
        echo "Before proceed sort order is 20" . PHP_EOL;
        $proceed();
        echo "After proceed sort order is 20" . PHP_EOL;
    }


}
