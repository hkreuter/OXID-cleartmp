<?php
namespace \ClearTmp\Controller;

class NavigationController extends Navigation_parent
{
    /**
	 * Function to read the tmp-directory and delete the files
	 */
    public function cleartmp()
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
