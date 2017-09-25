<?php
namespace Magento\Ui\Controller\Adminhtml\Export\GridToXml;

/**
 * Interceptor class for @see \Magento\Ui\Controller\Adminhtml\Export\GridToXml
 */
class Interceptor extends \Magento\Ui\Controller\Adminhtml\Export\GridToXml implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Model\Export\ConvertToXml $converter, \Magento\Framework\App\Response\Http\FileFactory $fileFactory)
    {
        $this->___init();
        parent::__construct($context, $converter, $fileFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
