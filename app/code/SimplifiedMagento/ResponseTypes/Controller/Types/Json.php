<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class Json
 * @package SimplifiedMagento\ResponseTypes\Controller\Types
 */

namespace SimplifiedMagento\ResponseTypes\Controller\Types;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Json implements ActionInterface
{
    /**
     * @var JsonFactory $resultJsonFactory
     */
    private JsonFactory $resultJsonFactory;

    public function __construct(
        JsonFactory $resultJsonFactory
    ) {
        $this->resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
        return $this->resultJsonFactory->create()->setData([
            'name' => 'Mudasser',
            'profession' => 'Web Developer'
        ]);
    }
}
