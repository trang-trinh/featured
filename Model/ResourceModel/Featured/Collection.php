<?php
namespace Magepow\Featured\Model\ResourceModel\Featured;

use Magepow\Featured\Model\Featured;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    protected function _construct()
    {
        $this->_init(\Magepow\Featured\Model\Featured::class, \Magepow\Featured\Model\ResourceModel\Featured::class);
    }
}
