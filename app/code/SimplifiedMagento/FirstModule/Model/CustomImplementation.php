<?php

/**
 * Class CustomImplementation
 * @package SimplifiedMagento\FirstModule\Model
 */

namespace SimplifiedMagento\FirstModule\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\Data\ProductSearchResultsInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

class CustomImplementation implements ProductRepositoryInterface
{
    public function save(ProductInterface $product, $saveOptions = false): ProductInterface
    {
        // TODO: Implement save() method.
    }

    public function get($sku, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement get() method.
    }

    public function getById($productId, $editMode = false, $storeId = null, $forceReload = false): ProductInterface
    {
        // TODO: Implement getById() method.
    }

    public function delete(ProductInterface $product): bool
    {
        // TODO: Implement delete() method.
    }

    public function deleteById($sku): bool
    {
        // TODO: Implement deleteById() method.
    }

    public function getList(SearchCriteriaInterface $searchCriteria): ProductSearchResultsInterface
    {
        // TODO: Implement getList() method.
    }
}
