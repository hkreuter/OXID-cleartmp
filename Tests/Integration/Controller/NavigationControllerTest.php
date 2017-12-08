<?php

namespace OxCom\ClearTmp\Tests\Integration\Controller;

class NavigationControllerTest extends \OxidEsales\TestingLibrary\UnitTestCase
{
    /**
     * Set up fixture.
     */
    protected function setUp()
    {
        parent::setUp();

        $htaccess = \OxidEsales\eShop\Core\Registry::getConfig()->getConfigParam('sCompileDir') . DIRECTORY_SEPARATOR . '.htaccess';
        if (!file_exists($htaccess)) {
            $content = "# disabling file access
                        <FilesMatch .*>
                            <IfModule mod_authz_core.c>
                                Require all denied
                            </IfModule>
                            <IfModule !mod_authz_core.c>
                                Order allow,deny
                                Deny from all
                            </IfModule>
                        </FilesMatch>
                        
                        Options -Indexes
                        ";
            file_put_contents($htaccess, $content);
        }
    }

    /**
     * Test cleaning tmp directory.
     */
    public function testTmpCleaning()
    {
        //preparation: fill compile dir
        file_get_contents(\OxidEsales\eShop\Core\Registry::getConfig()->getShopUrl());
        $this->assertTrue(is_dir(\OxidEsales\eShop\Core\Registry::getConfig()->getConfigParam('sCompileDir') . DIRECTORY_SEPARATOR . 'smarty'));
        $this->assertTrue(file_exists(\OxidEsales\eShop\Core\Registry::getConfig()->getConfigParam('sCompileDir') . DIRECTORY_SEPARATOR . '.htaccess'));

        $navigation = oxNew(\OxidEsales\Eshop\Application\Controller\Admin\NavigationController::class);
        $navigation->clearTmp();

        //asserts
        $this->assertFalse(is_dir(\OxidEsales\eShop\Core\Registry::getConfig()->getConfigParam('sCompileDir') . DIRECTORY_SEPARATOR . 'smarty'));
        $this->assertTrue(file_exists(\OxidEsales\eShop\Core\Registry::getConfig()->getConfigParam('sCompileDir') . DIRECTORY_SEPARATOR . '.htaccess'));
    }
}