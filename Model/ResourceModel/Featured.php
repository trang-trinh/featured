<?php
namespace Magepow\Featured\Model\ResourceModel;

class Featured extends \Magento\Framework\Model\ResourceModel\Db\AbstractDB
{
    protected function _construct()
    {
        $this->_init('catalog_product_entity','entity_id');
    }
}
