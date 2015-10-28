<?php
// http://stackoverflow.com/questions/5683225/how-to-generate-a-static-html-file-from-the-output-of-a-php-script-using-php
//	
//  

require_once 'config.inc.php';


$dir_sites='sites';

// loop over sites
foreach (scandir($dir_sites) as $site) {

	// ignore "dot" dirs, this is not a site...
	if ( in_array($site, array('.','..','homesite'))) continue;
	echo "## generate site: $site \n";
	include 'generateSite.php';
} // eo loop over sites
echo "### END OF Generating All sites \n";
?>
