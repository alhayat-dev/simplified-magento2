<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class CodeAttributeExtension
 * @package SimplifiedMagento\Attribute\Plugin
 */

namespace SimplifiedMagento\Attribute\Plugin;

use SimplifiedMagento\Database\Api\Data\AffiliateMemberExtensionFactory;
use SimplifiedMagento\Database\Model\AffiliateMemberRepository;

class CodeAttributeExtension
{
    /**
     * @var AffiliateMemberExtensionFactory $extensionFactory
     */
    private AffiliateMemberExtensionFactory $extensionFactory;

    public function __construct(
        AffiliateMemberExtensionFactory $extensionFactory
    ) {
        $this->extensionFactory = $extensionFactory;
    }

    public function aroundGetAffiliateMemberById(AffiliateMemberRepository $subject, \Closure $proceed, $id)
    {
        $model = $proceed($id);
        $extensionAttributes = $model->getExtensionAttributes();
        if ($extensionAttributes == null) {
            $extensionAttributes = $this->extensionFactory->create();
        }

        $extensionAttributes->setCode("Code #" . $id);
        $model->setExtensionAttributes($extensionAttributes);
        return $model;
    }
}
