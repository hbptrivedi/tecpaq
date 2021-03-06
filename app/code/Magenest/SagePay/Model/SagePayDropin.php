<?php
/**
 * Created by PhpStorm.
 * User: chung
 * Date: 2/4/17
 * Time: 11:20 AM
 */

namespace Magenest\SagePay\Model;

class SagePayDropin extends SagePay
{
    const PAYMENT_METHOD_CUSTOM_PAYMENT_CODE = 'magenest_sagepay_dropin';

    protected $_code = self::PAYMENT_METHOD_CUSTOM_PAYMENT_CODE;

    public function isAvailable(\Magento\Quote\Api\Data\CartInterface $quote = null)
    {
        return \Magento\Payment\Model\Method\AbstractMethod::isAvailable($quote);
    }

    public function validate(\Magento\Quote\Api\Data\CartInterface $quote = null)
    {
        return true;
    }

    public function isActive($storeId = null)
    {
        return \Magento\Payment\Model\Method\AbstractMethod::isActive($storeId); // TODO: Change the autogenerated stub
    }

    public function getConfigPaymentAction()
    {
        return \Magento\Payment\Model\Method\AbstractMethod::getConfigPaymentAction();
    }

    public function getDebugFlag()
    {
        return (bool)(int)$this->_scopeConfig->getValue('payment/magenest_sagepay/debug');
    }

    public function canUseInternal()
    {
        return false;
    }
}
