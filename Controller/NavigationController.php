<?php

namespace Hackathon2017\ClearTmp\Controller;

/**
 * Class NavigationController:
 */
class NavigationController extends Navigation_parent
{
    /**
     * Function to read the tmp-directory and delete the files
     */
    public function clearTmp()
    {
        $aFiles = glob('../tmp/*');
        foreach($aFiles as $file) {
            if ($file != '.htaccess')
            {
                unlink($file);
            }
        }
    }
}
