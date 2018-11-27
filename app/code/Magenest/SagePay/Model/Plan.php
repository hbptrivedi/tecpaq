<?php
/**
 * Created by Magenest.
 * Author: Pham Quang Hau
 * Date: 08/08/2016
 * Time: 23:20
 */

namespace Magenest\SagePay\Model;

use Magenest\SagePay\Model\ResourceModel\Plan as Resource;
use Magenest\SagePay\Model\ResourceModel\Plan\Collection as Collection;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;

class Plan extends AbstractModel
{
    protected $_eventPrefix = 'plan_';

    public function __construct(
        Context $context,
        Registry $registry,
        Resource $resource,
        Collection $resourceCollection,
        $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }
}
