<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class LogTextAtCheckout
 * @package SimplifiedMagento\EventObserver\Observer
 */


namespace SimplifiedMagento\EventObserver\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class LogTextAtCheckout implements ObserverInterface
{

    public function execute(Observer $observer)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
    }
}
