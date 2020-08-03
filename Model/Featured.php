<?php
namespace Magepow\Featured\Model;

class Featured extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Magepow\Featured\Model\ResourceModel\Featured::class);
    }
}
