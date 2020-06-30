<?php

namespace OxidAcademy\ProductCounterWidget\Controller;

use OxidAcademy\ProductCounterService\Counter;
use OxidEsales\Eshop\Application\Component\Widget\WidgetController;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;

class ProductCounterController extends WidgetController
{
    public function init()
    {
        parent::init();

        $this->_aViewData['numberOfProducts'] = $this->getNumberOfProducts();
    }

    public function render()
    {
        parent::render();

        return 'productcounter.tpl';
    }

    public function isCacheable()
    {
        return true;
    }

    private function getNumberOfProducts(): int
    {
        $containerFactory = ContainerFactory::getInstance();
        $container = $containerFactory->getContainer();
        $counterService = $container->get(Counter::class);

        //return $counterService->count();
        return time();
    }
}
