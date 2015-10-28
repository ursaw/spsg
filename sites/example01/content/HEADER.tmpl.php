<?php
//              file.html => title
$a_pages=array("index"=>"HOME", "a" =>  "weitere seite"
// hier falsche links
, "a1" =>  "gibts nicht"
, "a2" =>  "dead link"
); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="generator"   content="spsg">
    <title>Simple Example : <?= $a_pages[$page] ?></title>
    <link href='fontstyle.css' rel='stylesheet' type='text/css'>
</head>
<body>
 <script src="visitenkarte.js"></script>
<!--  BEGIN MENU -->
<table style=" border-spacing: 0px;">
	<tr>
<?php

// Starting with Menu..
foreach( $a_pages AS $key => $value)
{
	if ($page == $key){
		$additon="background-color:#aaaaaa;border-top :3px solid #000; border-right :3px solid #000; border-left :3px solid #000; ";
	}else{
		$additon=" border-bottom :1px solid #000;";
	}
?>
		<td style="text-align:center;width:150px;padding:0px;<?= $additon ?>"><a href="<?= $key ?>.html"><?=$value?></a>  </td>
<?php }  ?>
	</tr>
</table>
<!--  END MENU -->

