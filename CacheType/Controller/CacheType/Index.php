<?php

namespace HN\CacheType\Controller\CacheType;

use HN\CacheType\Helper\Cache;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * @var Cache
     */
    protected $cacheHelper;

    /**
     * @param Cache $cacheHelper
     * @param Context $context
     */
    public function __construct(
        Cache $cacheHelper,
        Context $context
    ) {
        parent::__construct($context);
        $this->cacheHelper = $cacheHelper;
    }

    /**
     * Execute action based on request and return result
     */
    public function execute()
    {
        $data = 'Test Cache';
        $this->cacheHelper->save($data, Cache::CACHE_ID);
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
