<?php
// http://stackoverflow.com/questions/5683225/how-to-generate-a-static-html-file-from-the-output-of-a-php-script-using-php
//	
//  

require_once 'config.inc.php';

require_once 'lib/functions/helper.php';
require_once 'lib/functions/mailtoJS.php';



// actual page to generate, can be referenced in all scripts as well
$page="";



$dir_staticPages='sites/'. $site .'/html';
$dir_tmpltPages ='sites/'. $site .'/content';





// loop over files in directory
foreach (scandir($dir_tmpltPages) as $file) {

	// ignore not content files
	if ( !endsWith($file,PAGEPOSTFIX) ) continue;

	$page=substr($file, 0 , strlen($file)- strlen(PAGEPOSTFIX) );
	//echo "xx". PAGEPOSTFIX . "  ".$page;
	$html_outfile=$dir_staticPages .'/'. $page .".html";
	
	echo "Generating page: ". $site .'/'. $page . "\n";
	// start the output buffer ; Here also tidy...
	ob_start();//'tidyHTML');
	
	//Your usual PHP script and HTML here ...
	
	// page without any postfix
	include $dir_tmpltPages.'/'.'HEADER.tmpl.php';
	include $dir_tmpltPages.'/'. $page .PAGEPOSTFIX;
	include $dir_tmpltPages.'/'.'FOOTER.tmpl.php';
	
	
	 
	// open the cache file "cache/home.html" for writing
	$fp = fopen($html_outfile, 'w');
	// save the contents of output buffer to the file
	if($b_tidyhtml && function_exists("tidy_parse_string")) 
	{
		//echo ob_get_contents();
		$tidy = new tidy;
		$tidy->parseString(ob_get_contents(), $tidyconfig, 'utf8');
		$tidy->cleanRepair();
		
		fwrite($fp, $tidy);
	}
	else
	{
		fwrite($fp, ob_get_contents());
	}
	//
	// close the file
	fclose($fp);
	// Send the output to the browser
	//ob_end_flush();
	ob_end_clean();
} // end all files in the directory
echo "## END OF Generating $site  pages \n";
?>