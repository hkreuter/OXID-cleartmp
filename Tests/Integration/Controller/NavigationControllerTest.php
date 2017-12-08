<?php

namespace Hackathon2017\ClearTmp\Tests\Integration\Controller;

class NavigationControllerTest extends \OxidEsales\TestingLibrary\UnitTestCase
{
    /**
     * Test cleaning tmp directory.
     */
    public function testTmpCleaning()
    {
        //preparation: fill compile dir
        file_get_contents(\OxidEsales\eShop\Core\Registry::getConfig()->getShopUrl());
        $this->assertTrue(is_dir(\OxidEsales\eShop\Core\Registry::getConfig()->getConfigParam('sCompileDir') . DIRECTORY_SEPARATOR . 'smarty'));

        $navigation = oxNew(\OxidEsales\Eshop\Application\Controller\Admin\NavigationController::class);
        $navigation->clearTmp();

        //asserts
        $this->assertFalse(is_dir(\OxidEsales\eShop\Core\Registry::getConfig()->getConfigParam('sCompileDir') . DIRECTORY_SEPARATOR . 'smarty'));
        $this->assertTrue(file_exists(\OxidEsales\eShop\Core\Registry::getConfig()->getConfigParam('sCompileDir') . DIRECTORY_SEPARATOR . '.htaccess'));
    }
}