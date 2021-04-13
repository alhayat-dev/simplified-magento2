<?php

declare(strict_types=1);

namespace SimplifiedMagento\CustomAdmin\Model\Member;

use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\CollectionFactory;
use Magento\Framework\App\Request\DataPersistorInterface;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var \SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\Collection
     */
    protected $collection;

    /**
     * @var DataPersistorInterface
     */
    protected $dataPersistor;

    /**
     * @var array
     */
    protected $loadedData;

    /**
     * Constructor
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $groupCollectionFactory
     * @param DataPersistorInterface $dataPersistor
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $groupCollectionFactory,
        DataPersistorInterface $dataPersistor,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $groupCollectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        /** @var \SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember $affiliateMember */
        foreach ($items as $affiliateMember) {
            $this->loadedData[$affiliateMember->getId()] = $affiliateMember->getData();
        }

        // Used from the Save action
        $data = $this->dataPersistor->get('member');
        if (!empty($data)) {
            $group = $this->collection->getNewEmptyItem();
            $group->setData($data);
            $this->loadedData[$affiliateMember->getId()] = $affiliateMember->getData();
            $this->dataPersistor->clear('member');
        }

        return $this->loadedData;
    }
}
