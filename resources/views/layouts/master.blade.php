<!doctype html>
<!--Conditionals for IE8-9 Support-->
<!--[if IE]><html lang="en" class="ie"><![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    
    <title>M&M</title>
    
    <!--SEO Meta Tags-->
    <meta name="description" content="Responsive Multipurpose HTML5 Template" />
		<meta name="keywords" content="fashion,lifestyle,music,shopping" />
		<meta name="author" content="8Guild" />
    <!--Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Favicon-->
    <link rel="shortcut icon" href={{url("/favicon.ico")}} type="image/x-icon">
    <link rel="icon" href={{url("/favicon.ico")}} type="image/x-icon">
    <!--Master Slider Styles-->
    <link href={{url("/masterslider/style/masterslider.css")}} rel="stylesheet" media="screen">
    <!--Kedavra Stylesheet-->
    <link href={{url("/css/styles.css")}} rel="stylesheet" media="screen">
    <!--Kedavra Color Scheme-->
    <link class="color-scheme" href="css/colors/color-2f8cea.css" rel="stylesheet" media="screen">
    <!--Google Maps API-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5DLwPPVAz88_k0yO2nmFe7T9k1urQs84"></script>
    <!--Modernizr-->
		<script src={{url("/js/libs/modernizr.custom.js")}}></script>
    <!--Adding Media Queries Support for IE8-->
    <!--[if lt IE 9]>
      <script src="js/plugins/respond.js"></script>
    <![endif]-->
    
  </head>

  <!--Body--> 
  <body class="parallax animated fadeIn"><!--Add "parallax" class if you have elements on the page with parallax backgrounds. "fadeIn" class makes content fades in on loading-->
  	@include("partials.share-modal")
   	
    <!--Off-Canvas-->
    <div class="off-canvas-wrap" data-offcanvas>
    	<div class="inner-wrap">
      
      	 @include("partials.off-canvas-menu")
        <!--Layout-->
        <div class="site-layout"><!--If you add class "boxed" to .site-layout it wraps the whole document in a box, than you can simply add pattern background to body or leave it white. Please note in a "boxed" mode header doesn't stick to the top.-->
        
          @include("partials.header-toolbar")
          <!--Header-->
          <header class="header sticky"><!--Adding class "sticky" to header enables its pinning to top on scroll. Please note in a "boxed" mode header doesn't stick to the top.-->
            <div class="inner">
              <div class="container group">
              
                <!--Logo-->
                <a class="logo" href="index.html"><img src="img/logo.png" alt="Kedavra"/></a>
                
                <!-- Toggle-->
                <div class="left-off-canvas-toggle" id="nav-toggle">
                  <span></span>
                </div>
                
                <!--Site Navigation-->
                <div class="navigation">
                  <!--Menu-->
                  @include("partials.nav")
                  <!--Search-->
                  <div class="search"><i class="flaticon-search100"></i></div>
                </div>
                
                @include("partials.tools")
                
              </div>
            </div>
            
            <!--Quick Search-->
            <form class="quick-search" method="get" autocomplete="off">
              <div class="overlay"></div>
              <input class="search-field" type="text" placeholder="Search">
              <span>Press enter to search</span>
            </form>
            
          </header><!--Header Close-->
          
          <!--Page Content--><!-- InstanceBeginEditable name="content" -->
  @yield('content')
