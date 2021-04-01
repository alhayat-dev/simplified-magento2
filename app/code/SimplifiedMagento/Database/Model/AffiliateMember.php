<?php

declare(strict_types=1);

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Model\AbstractModel;
use SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface;

class AffiliateMember extends AbstractModel implements AffiliateMemberInterface
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\AffiliateMember::class);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        $this->getData(self::ADDRESS);
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getData(self::PHONE_NUMBER);
    }

    /**
     * @return string
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @return string
     */
    public function getUpdationTime()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }

    public function setStatus($status)
    {
        $this->setData(self::STATUS, $status);
    }

    public function setAddress($address)
    {
        $this->setData(self::ADDRESS, $address);
    }

    public function setPhoneNumber($number)
    {
        $this->setData(self::PHONE_NUMBER, $number);
    }

    public function setCreatedAt($creationTime)
    {
        $this->setData(self::UPDATED_AT, $creationTime);
    }
}
