<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class Raw
 * @package SimplifiedMagento\ResponseTypes\Controller\Types
 */

namespace SimplifiedMagento\ResponseTypes\Controller\Types;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Raw implements ActionInterface
{
    /**
     * @var RawFactory $resultRawFactory
     */
    private RawFactory $resultRawFactory;

    public function __construct(
        RawFactory $resultRawFactory
    ) {
        $this->resultRawFactory = $resultRawFactory;
    }

    public function execute()
    {
        $result = $this->resultRawFactory->create();

        // Return XML data
        $result->setHeader('Content-Type', 'text/xml');
        $result->setContents('<user>
                                <name>Mudasser Hayat</name>
                                <country>Pakistan</country>
                            </user>');

        return $result;
    }
}
