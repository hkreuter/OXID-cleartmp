<?php

namespace OxCom\ClearTmp\Controller;

/**
 * Class NavigationController:
 */
class NavigationController extends NavigationController_parent
{

    /**
     * Do not deleted the files listed here.
     *
     * @var array
     */
    private $doNotDelete = ['.htaccess'];

    /**
     * Function to read the tmp-directory and delete the files
     */
    public function clearTmp()
    {
        $tmpDir = \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('sCompileDir');

        $directoryIterator = new \RecursiveDirectoryIterator($tmpDir, \RecursiveDirectoryIterator::SKIP_DOTS);
        $items = new \RecursiveIteratorIterator($directoryIterator, \RecursiveIteratorIterator::CHILD_FIRST);

        foreach ($items as $item) {
            if (in_array(basename($item), $this->doNotDelete)) {
                continue;
            }
            if ($item->isDir()) {
                rmdir($item->getRealPath());
            } else {
                unlink($item->getRealPath());
            }
        }
    }
}
