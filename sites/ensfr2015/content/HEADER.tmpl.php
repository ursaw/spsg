<?php 
$a_pages=array("index"=>"HOME"
		, "bundesliga" => "Bundesliga" 
		/* "club" =>  "Der Club" ,*/ 
		,"jubilaeum25" =>  "25 Jahr Fest" 
		, "recht" =>  "Rechtliches"); 


?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php /* <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --> */?>
    <meta name="description" content="Entdecker und Seefahrer Fördervereinigung e.V.">
    <meta name="author"      content="Urs Wihlfahrt">
    <meta name="generator"   content="spsg">
    <meta name="description" content="Homepage of the German sailing club Entdecker und Seefahrer Fördervereinigung e.V.">
    <meta name="copyright"   content="Entdecker und Seefahrer Fördervereinigung e.V." />
		<?php 
		/*  ONLINE
		 *     http://www.icoconverter.com/
		 * 
		 *  Imagick  (aber Problem mit transparenz)
		 *  convert -resize x16 -gravity center -crop 16x16+0+0 img/ensfr_stander.svg -flatten -colors 256 favicon.ico
		 *     -background transparent
		 *     http://stackoverflow.com/questions/3185677/converting-gifs-pngs-and-jpgs-to-ico-files-using-imagemagick
		 */
		 ?> 
	<link rel="icon" href="favicon.ico">
    <title>Entdecker und Seefahrer Fördervereinigung e.V.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style-ensfr.css" rel="stylesheet">
<?php /* 
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
*/?>
  </head>

  <body>

    <!-- Static navbar  navbar-fixed-top -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">EnSFr</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
             <?php foreach ($a_pages AS $key => $val){
            	echo "\n\t<li";
            	if($page == $key) {
            		echo ' class="active"';
            	}
            	echo '><a href="'. $key .'.html">'. $val .'</a></li>';
            }
            ?>
            
            
            <?php /*  EXAMPLE MENU AND SUBMENU 
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
              */?>
            
          </ul>
<?php /*         
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
*/?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
<?php /*     <div class="ensfr-template"> */?>
<!-- ================================================== -->
<!-- ===   START OF CONTENT OF <?= $page ?> -->
<!-- ================================================== -->

