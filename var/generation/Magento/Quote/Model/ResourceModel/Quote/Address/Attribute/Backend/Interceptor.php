<?php
namespace Magento\Quote\Model\ResourceModel\Quote\Address\Attribute\Backend;

/**
 * Interceptor class for @see \Magento\Quote\Model\ResourceModel\Quote\Address\Attribute\Backend
 */
class Interceptor extends \Magento\Quote\Model\ResourceModel\Quote\Address\Attribute\Backend implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($object);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }
}
