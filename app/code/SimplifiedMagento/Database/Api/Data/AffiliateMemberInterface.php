<?php

declare(strict_types=1);

namespace SimplifiedMagento\Database\Api\Data;

/**
 * @method getData()
 * @method setData(int|string $key, mixed $value)
 */
interface AffiliateMemberInterface
{
    const NAME = 'name';
    const ADDRESS = 'address';
    const STATUS = 'status';
    const CREATED_AT = 'creation_time';
    const UPDATED_AT = 'update_time';
    const ID = 'entity_id';
    const PHONE_NUMBER = 'phone_number';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return boolean
     */
    public function getStatus();

    /**
     * @return string
     */
    public function getAddress();

    /**
     * @return string
     */
    public function getPhoneNumber();

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getUpdationTime();

    /**
     * @param $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setId($id);

    /**
     * @param $name
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setName($name);

    /**
     * @param $status
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setStatus($status);

    /**
     * @param $address
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setAddress($address);

    /**
     * @param $number
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setPhoneNumber($number);


    /**
     * @param $creationTime
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function setCreatedAt($creationTime);

}
