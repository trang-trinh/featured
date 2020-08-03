<?php
namespace Magepow\Featured\Controller\Index;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    protected $_featuredFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magepow\Featured\Model\FeaturedFactory $featuredFactory
    )
    {
        $this->_featuredFactory = $featuredFactory->create();
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $featured = $this->_featuredFactory->getCollection();
        echo "<pre>";
        print_r($featured->getData());
        echo "</pre>";
    }
}
