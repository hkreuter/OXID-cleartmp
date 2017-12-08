<?php
class navigation_ext extends navigation_ext_parent
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
