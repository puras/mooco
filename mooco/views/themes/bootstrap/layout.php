<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="http://demo.seventhemes.com/hli/" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="SevenThemes.com, Joomla! template, HLI,  7Studio ThemeForest, demo template," />
    <meta name="description" content="HLI, Joomla! 3 Template by 7Studio.HLI template demo website." />
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="/hli/plugins/system/jch_optimize/assets2/jscss.php?f=9529e37edb26b43e936ec2b04f2aba1c&amp;type=css&amp;gz=gz&amp;d=30"/>
    <link rel="stylesheet" href="http://demo.seventhemes.com/hli/modules/mod_st_slider/assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/hli/media/com_finder/css/finder.css" type="text/css" />

    <style type="text/css">
 
#st-menu {
    margin-top: 96px;
}
#st-menu .nav.menu ul li {
    width: 225px;
}
.logo {
    margin-top:70px;
    margin-bottom:50px;
}
body {
    background-color:#dedede;
    color:#808080;
    font-size:14px;
}

.container-fluid {
    max-width: 1000px;
} 
.st-site-wrap {
    max-width: 1100px;
}
H1,H2,H3,H4,H5,H6,legend,#st-menu li { font-family: Roboto; }
body {
    background-image: url("http://demo.seventhemes.com/hli/images/demo_content/shattered-gray.png");
    background-position: left top;
    background-repeat: repeat;
    background-attachment: scroll;
}

        .st-slider .sequence { padding-bottom: 50%; }
        .st-progress.active::before { opacity: 1; -webkit-transition: -webkit-transform 4600ms linear 0.3s; transition: transform 4600ms linear 0.3s;}
        
  </style>
  <script type="text/javascript" src="/hli/plugins/system/jch_optimize/assets2/jscss.php?f=6e9f424325435a685d98911bdb69861d&amp;type=js&amp;gz=gz&amp;d=30"></script>
  
  
  
  
  <script src="/hli/components/com_k2/js/k2.js?v2.6.8&amp;sitepath=/hli/" type="text/javascript"></script>
  
  
  
  <script src="http://demo.seventhemes.com/hli/modules/mod_st_newsflash/assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
  <script src="http://demo.seventhemes.com/hli/modules/mod_st_slider/assets/js/jquery.sequence-min.js" type="text/javascript"></script>
  <script src="/hli/media/com_finder/js/autocompleter.js" type="text/javascript"></script>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
                new JCaption('img.caption');
            });
        var 
        _gaq = _gaq || []; 
        _gaq.push(['_setAccount', 'UA-47888403-1']); 
        _gaq.push(['_trackPageview']); 

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; 
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); 
        })(); 
    
    jQuery(document).ready(function(){
        jQuery(".modal-toggle, .st-modal.backdrop").popup();
    });
    
    jQuery(document).ready(function(){
        jQuery("#totop").scrollToTop();
    });
    
    jQuery(document).ready(function(){
        jQuery(".st-off-canvas-toggle").offcanvas();
    });
    
    jQuery(document).ready(function(){
        jQuery(".module-title h3").addspan();
    });
    
window.setInterval(function(){var r;try{r=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP")}catch(e){}if(r){r.open("GET","./",true);r.send(null)}},1740000);
jQuery(document).ready(function(){
    jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
jQuery(window).load(function() {
  jQuery('#news-slider-5489c9e972b7d').flexslider({
    controlNav: false,
    slideshowSpeed: 5000, 
    slideshow: true,
    
    
    animation: "slide"
  });
});

        jQuery(document).ready(function(){
            $status = jQuery(".st-progress");
            var options = {
                autoPlay: true,
                autoPlayDelay: 5000,
                prevButton: true,
                nextButton: true,
                pauseOnHover: true,
                reverseAnimationsWhenNavigatingBackwards: true,
                keyNavigation: true,
                swipeNavigation: true,
                navigationSkip: false,
                animateStartingFrameIn: true,
                preloader: ".sequence-preloader",
                hidePreloaderUsingCSS: true,
                hidePreloaderDelay: 1000,
                preloadTheseFrames: [1],
                preloadTheseImages: [
                "/hli/cache/mod_st_slider/slide1.jpg","/hli/cache/mod_st_slider/slide2.jpg","/hli/cache/mod_st_slider/slide3.jpg","/hli/cache/mod_st_slider/slide5a.jpg"
                ]
            };
                
            var sequence = jQuery(".sequence").sequence(options).data("sequence");
            
                sequence.afterNextFrameAnimatesIn = function() {
                    if(sequence.settings.autoPlay && !sequence.hardPaused && !sequence.isPaused) {
                        $status.addClass("active");
                    }
                };
                sequence.beforeCurrentFrameAnimatesOut = function() {
                    if(sequence.settings.autoPlay && !sequence.hardPaused) {
                        $status.removeClass("active");
                    }
                };
                sequence.paused = function() {
                    $status.removeClass("active").addClass("paused");
                };
                sequence.unpaused = function() {
                    if(!sequence.hardPaused) {
                        $status.removeClass("paused").addClass("active");
                    }               
                };
            
        }); 
  </script>

        
<!--[if IE 8]>
<link rel="stylesheet" href="/hli/templates/hli/css/template-ie8.css" type="text/css" />
<![endif]-->

<!--[if IE 9]>
<link rel="stylesheet" href="/hli/templates/hli/css/template-ie9.css" type="text/css" />
<![endif]-->

<!--[if IE 10]>
<link rel="stylesheet" href="/hli/templates/hli/css/template-ie10.css" type="text/css" />
<![endif]-->

<!--[if lt IE 9]>
<script src="/hli/media/jui/js/html5.js"></script>
<![endif]-->
</head>
<body class="helvetica no-layout no-task itemid-101 no-pattern responsive no-rtl com_content view-featured">
    <div id="st-outer-wrap">

        <nav id="st-mobile-wrap" class="st-off-canvas" role="navigation">
            <button type="button" id="st-mobile-close" class="st-off-canvas-toggle">&#215;</button>
            <div class="clearfix"></div>
            <ul class="nav menu">
<li class="item-101 current active"><a href="/hli/" >Home</a></li><li class="item-111 deeper parent"><a href="#" >Template</a><ul class="nav-child unstyled small"><li class="item-115"><a href="/hli/template/module-positions" >Module Positions</a></li><li class="item-114"><a href="/hli/template/module-variations" >Module Variations</a></li><li class="item-116"><a href="/hli/template/typography" >Typography</a></li><li class="item-112"><a href="/hli/template/offline-page" >Offline Page</a></li><li class="item-113"><a href="/hli/component" >Error page</a></li><li class="item-145 deeper parent"><a href="#" >Styles</a><ul class="nav-child unstyled small"><li class="item-146"><a href="/hli/?style=style1" >Style 1</a></li><li class="item-147"><a href="/hli/?style=style2" >Style 2</a></li><li class="item-148"><a href="/hli/?style=style3" >Style 3</a></li><li class="item-149"><a href="/hli/?style=style4" >Style 4</a></li><li class="item-150"><a href="/hli/?style=style5" >Style 5</a></li><li class="item-151"><a href="/hli/?style=style6" >Style 6</a></li><li class="item-222"><a href="#" >Unlimited color accents</a></li></ul></li><li class="item-117"><a href="/hli/template/article-page-break" >Article Page Break</a></li></ul></li><li class="item-119 deeper parent"><a href="#" >Joomla</a><ul class="nav-child unstyled small"><li class="item-120 divider deeper parent"><span class="separator">
    Content Component</span>
<ul class="nav-child unstyled small"><li class="item-184"><a href="/hli/joomla/content-component/single-article" >Single Article</a></li><li class="item-122"><a href="/hli/joomla/content-component/archived-articles" >Archived Articles</a></li><li class="item-121"><a href="/hli/joomla/content-component/featured-articles" >Featured Articles</a></li><li class="item-185"><a href="/hli/news" >Category Blog Layout</a></li><li class="item-186"><a href="/hli/joomla/content-component/category-list" >Category List</a></li></ul></li><li class="item-124 deeper parent"><a href="/hli/joomla/user-component" >User Component</a><ul class="nav-child unstyled small"><li class="item-125"><a href="/hli/joomla/user-component/login-form" >Login Form</a></li><li class="item-126"><a href="/hli/joomla/user-component/user-profile" >User Profile</a></li><li class="item-127"><a href="/hli/joomla/user-component/edit-user-profile" >Edit User Profile</a></li><li class="item-128"><a href="/hli/joomla/user-component/registration-form" >Registration Form</a></li><li class="item-129"><a href="/hli/joomla/user-component/username-reminder-request" >Username Reminder Request</a></li><li class="item-130"><a href="/hli/joomla/user-component/password-reset" >Password Reset</a></li></ul></li><li class="item-131 deeper parent"><a href="/hli/joomla/search-component" >Search Component</a><ul class="nav-child unstyled small"><li class="item-133"><a href="/hli/joomla/search-component/smart-search" >Smart Search</a></li><li class="item-132"><a href="/hli/joomla/search-component/standard-search-component" >Standard Search Component</a></li></ul></li><li class="item-134 divider deeper parent"><span class="separator">
    Contact Component</span>
<ul class="nav-child unstyled small"><li class="item-135"><a href="/hli/joomla/contact-component/list-contact-categories" >List Contact Categories</a></li><li class="item-136"><a href="/hli/contact-us" >List Contacts in Category</a></li><li class="item-137"><a href="/hli/joomla/contact-component/single-contact" >Single Contact</a></li></ul></li><li class="item-138 deeper parent"><a href="/hli/joomla/weblinks-component" >Weblinks Component</a><ul class="nav-child unstyled small"><li class="item-139"><a href="/hli/joomla/weblinks-component/list-all-web-link-categories" >List All Web Link Categories</a></li><li class="item-140"><a href="/hli/joomla/weblinks-component/list-web-links-in-a-category" >List Web Links in a Category</a></li></ul></li><li class="item-141 divider deeper parent"><span class="separator">
    News Feeds Component</span>
<ul class="nav-child unstyled small"><li class="item-142"><a href="/hli/joomla/news-feeds-component/list-news-feeds-in-a-category" >List News Feeds in a Category</a></li><li class="item-143"><a href="/hli/joomla/news-feeds-component/single-news-feed" >Single News Feed</a></li></ul></li><li class="item-144"><a href="/hli/joomla/iframe-wrapper" >Iframe Wrapper</a></li></ul></li><li class="item-199 deeper parent"><a href="#" >Products (K2)</a><ul class="nav-child unstyled small"><li class="item-201 deeper parent"><a href="/hli/products-k2/categories" >Categories</a><ul class="nav-child unstyled small"><li class="item-202"><a href="/hli/products-k2/categories/wooden-parquet" >Wooden Parquet</a></li><li class="item-203"><a href="/hli/products-k2/categories/classic-parquet" >Classic Parquet</a></li><li class="item-204"><a href="/hli/products-k2/categories/solid-wood-parquet" >Solid Wood Parquet</a></li></ul></li><li class="item-221"><a href="/hli/products-k2/categories/wooden-parquet" >Items at Category View</a></li><li class="item-205"><a href="/hli/products-k2/item-view" >Item View</a></li><li class="item-219"><a href="/hli/products-k2/tag-view" >Tag View</a></li><li class="item-220"><a href="/hli/products-k2/user-page" >User Page</a></li><li class="item-200"><a href="/hli/products-k2/latest-items" >Latest Items View</a></li></ul></li><li class="item-177"><a href="/hli/news" >News</a></li><li class="item-118"><a href="/hli/contact-us" >Contact Us</a></li></ul>

        </nav>
        
        <div id="st-body-wrap" class="st-off-canvas" role="main">
            <div class="st-site-wrap">
            
                                <div id="st-toolbar" class="clearfix">
                    <div class="container-fluid">
                    
                                                <div class="toolbar-a pull-left">
                            

<div class="custom"  >
    <p>Lorem ispum dolor sit amet?   -   <span style="color: #222222;">(+80) 123 456 789</span></p></div>

                        </div>
                            
                    
                                                <ul id="user-toolbar">
                            
                                                        <li><a href="#" class="login-guest modal-toggle"><span>Login</span></a></li>
                                
                            
                                                        <li><a href="/hli/joomla/user-component/registration-form" class="register-guest"><span>Register</span></a></li>
                                
                            
                        </ul>
                            
                    
                                                <div class="toolbar-b pull-right">
                            
<script type="text/javascript">
//<![CDATA[
    jQuery(function($)
    {
        var value, $searchword = $('#mod-finder-searchword');

        // Set the input value if not already set.
        if (!$searchword.val())
        {
            $searchword.val('Search...');
        }

        // Get the current value.
        value = $searchword.val();

        // If the current value equals the default value, clear it.
        $searchword.on('focus', function()
        {   var $el = $(this);
            if ($el.val() === 'Search...')
            {
                $el.val('');
            }
        });

        // If the current value is empty, set the previous value.
        $searchword.on('blur', function()
        {   var $el = $(this);
            if (!$el.val())
            {
                $el.val(value);
            }
        });

        $('#mod-finder-searchform').on('submit', function(e){
            e.stopPropagation();
            var $advanced = $('#mod-finder-advanced');
            // Disable select boxes with no value selected.
            if ( $advanced.length)
            {
                 $advanced.find('select').each(function(index, el) {
                    var $el = $(el);
                    if(!$el.val()){
                        $el.attr('disabled', 'disabled');
                    }
                });
            }
        });

        /*
         * This segment of code sets up the autocompleter.
         */
                                var url = '/hli/component/finder/?task=suggestions.display&format=json&tmpl=component';
            var ModCompleter = new Autocompleter.Request.JSON(document.getElementById('mod-finder-searchword'), url, {'postVar': 'q'});
            });
//]]>
</script>

<form id="mod-finder-searchform" action="/hli/joomla/search-component/smart-search" method="get" class="form-search">
    <div class="finder">
        <input type="text" name="q" id="mod-finder-searchword" class="search-query input-medium" size="25" value="" /><button class="  finder" type="submit" title="Go"><i class="icon-search"></i></button>
                <input type="hidden" name="Itemid" value="133" />   </div>
</form>

                        </div>
                            

                    </div>
                </div>
                
                <header id="header" class="clearfix">
                    <div class="container-fluid">
                        <div class="logo pull-left">
                            <a href="/hli"><img src="/hli/templates/hli/images/logo.png" alt="HLI" /></a>                       </div>
                        
                        <button type="button" id="st-mobile-toggle" class="st-off-canvas-toggle pull-right">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                                                <nav id="st-menu" class="pull-right" role="navigation"> 
                            <ul class="nav menu">
<li class="item-101 current active"><a href="/hli/" >Home</a></li><li class="item-111 deeper parent"><a href="#" >Template</a><ul class="nav-child unstyled small"><li class="item-115"><a href="/hli/template/module-positions" >Module Positions</a></li><li class="item-114"><a href="/hli/template/module-variations" >Module Variations</a></li><li class="item-116"><a href="/hli/template/typography" >Typography</a></li><li class="item-112"><a href="/hli/template/offline-page" >Offline Page</a></li><li class="item-113"><a href="/hli/component" >Error page</a></li><li class="item-145 deeper parent"><a href="#" >Styles</a><ul class="nav-child unstyled small"><li class="item-146"><a href="/hli/?style=style1" >Style 1</a></li><li class="item-147"><a href="/hli/?style=style2" >Style 2</a></li><li class="item-148"><a href="/hli/?style=style3" >Style 3</a></li><li class="item-149"><a href="/hli/?style=style4" >Style 4</a></li><li class="item-150"><a href="/hli/?style=style5" >Style 5</a></li><li class="item-151"><a href="/hli/?style=style6" >Style 6</a></li><li class="item-222"><a href="#" >Unlimited color accents</a></li></ul></li><li class="item-117"><a href="/hli/template/article-page-break" >Article Page Break</a></li></ul></li><li class="item-119 deeper parent"><a href="#" >Joomla</a><ul class="nav-child unstyled small"><li class="item-120 divider deeper parent"><span class="separator">
    Content Component</span>
<ul class="nav-child unstyled small"><li class="item-184"><a href="/hli/joomla/content-component/single-article" >Single Article</a></li><li class="item-122"><a href="/hli/joomla/content-component/archived-articles" >Archived Articles</a></li><li class="item-121"><a href="/hli/joomla/content-component/featured-articles" >Featured Articles</a></li><li class="item-185"><a href="/hli/news" >Category Blog Layout</a></li><li class="item-186"><a href="/hli/joomla/content-component/category-list" >Category List</a></li></ul></li><li class="item-124 deeper parent"><a href="/hli/joomla/user-component" >User Component</a><ul class="nav-child unstyled small"><li class="item-125"><a href="/hli/joomla/user-component/login-form" >Login Form</a></li><li class="item-126"><a href="/hli/joomla/user-component/user-profile" >User Profile</a></li><li class="item-127"><a href="/hli/joomla/user-component/edit-user-profile" >Edit User Profile</a></li><li class="item-128"><a href="/hli/joomla/user-component/registration-form" >Registration Form</a></li><li class="item-129"><a href="/hli/joomla/user-component/username-reminder-request" >Username Reminder Request</a></li><li class="item-130"><a href="/hli/joomla/user-component/password-reset" >Password Reset</a></li></ul></li><li class="item-131 deeper parent"><a href="/hli/joomla/search-component" >Search Component</a><ul class="nav-child unstyled small"><li class="item-133"><a href="/hli/joomla/search-component/smart-search" >Smart Search</a></li><li class="item-132"><a href="/hli/joomla/search-component/standard-search-component" >Standard Search Component</a></li></ul></li><li class="item-134 divider deeper parent"><span class="separator">
    Contact Component</span>
<ul class="nav-child unstyled small"><li class="item-135"><a href="/hli/joomla/contact-component/list-contact-categories" >List Contact Categories</a></li><li class="item-136"><a href="/hli/contact-us" >List Contacts in Category</a></li><li class="item-137"><a href="/hli/joomla/contact-component/single-contact" >Single Contact</a></li></ul></li><li class="item-138 deeper parent"><a href="/hli/joomla/weblinks-component" >Weblinks Component</a><ul class="nav-child unstyled small"><li class="item-139"><a href="/hli/joomla/weblinks-component/list-all-web-link-categories" >List All Web Link Categories</a></li><li class="item-140"><a href="/hli/joomla/weblinks-component/list-web-links-in-a-category" >List Web Links in a Category</a></li></ul></li><li class="item-141 divider deeper parent"><span class="separator">
    News Feeds Component</span>
<ul class="nav-child unstyled small"><li class="item-142"><a href="/hli/joomla/news-feeds-component/list-news-feeds-in-a-category" >List News Feeds in a Category</a></li><li class="item-143"><a href="/hli/joomla/news-feeds-component/single-news-feed" >Single News Feed</a></li></ul></li><li class="item-144"><a href="/hli/joomla/iframe-wrapper" >Iframe Wrapper</a></li></ul></li><li class="item-199 deeper parent"><a href="#" >Products (K2)</a><ul class="nav-child unstyled small"><li class="item-201 deeper parent"><a href="/hli/products-k2/categories" >Categories</a><ul class="nav-child unstyled small"><li class="item-202"><a href="/hli/products-k2/categories/wooden-parquet" >Wooden Parquet</a></li><li class="item-203"><a href="/hli/products-k2/categories/classic-parquet" >Classic Parquet</a></li><li class="item-204"><a href="/hli/products-k2/categories/solid-wood-parquet" >Solid Wood Parquet</a></li></ul></li><li class="item-221"><a href="/hli/products-k2/categories/wooden-parquet" >Items at Category View</a></li><li class="item-205"><a href="/hli/products-k2/item-view" >Item View</a></li><li class="item-219"><a href="/hli/products-k2/tag-view" >Tag View</a></li><li class="item-220"><a href="/hli/products-k2/user-page" >User Page</a></li><li class="item-200"><a href="/hli/products-k2/latest-items" >Latest Items View</a></li></ul></li><li class="item-177"><a href="/hli/news" >News</a></li><li class="item-118"><a href="/hli/contact-us" >Contact Us</a></li></ul>

                        </nav>
                                        
                    </div>
                </header>
                
                                <section id="slider">
                    
<div class="st-slider " style="max-width: 1100px;">

        <ul class="sequence-navigation">
        
                <li class="sequence-prev">Previous</li>
        <li class="sequence-next">Next</li>
            </ul>
    
    <div class="sequence">
        <div class="sequence-preloader"></div>
        <div class="st-progress"></div>
        
        <ul class="sequence-canvas">

                        
            
                        <li class="animate-in">
            
                
                <img class="slide-image right" src="/hli/cache/mod_st_slider/slide1.jpg" alt="New range of products"/>
                
                
                <section class="container-fluid">           
                                        
                    <div class="text-block left">
                    
                                                                        <h3 class="st-title-small st-animate st-delay-short">New range of products</h3>
                                                                
                                                                        <h2 class="st-title-big st-animate st-delay-medium">Solid Wood Parquet</h2>
                                            
                                            <p class="st-animate st-delay-long">
                            <a class="st-slide-link" href="/hli/index.php/products-k2/categories/wooden-parquet">More</a>
                        </p>
                                        </div>
                
                                    </section>

                
            </li>

                
                        
            
                        <li>
            
                
                <img class="slide-image right" src="/hli/cache/mod_st_slider/slide2.jpg" alt="Designed For Joomla 3.X series"/>
                
                
                <section class="container-fluid">           
                                        
                    <div class="text-block left">
                    
                                                                        <h3 class="st-title-small st-animate st-delay-short">Designed For Joomla 3.X series</h3>
                                                                
                                                                        <h2 class="st-title-big st-animate st-delay-medium">Corporate Design</h2>
                                            
                                            <p class="st-animate st-delay-long">
                            <a class="st-slide-link" href="/hli/index.php/template/module-variations">More</a>
                        </p>
                                        </div>
                
                                    </section>

                
            </li>

                
                        
            
                        <li>
            
                
                <img class="slide-image right" src="/hli/cache/mod_st_slider/slide3.jpg" alt="We strive for perfection"/>
                
                
                <section class="container-fluid">           
                                        
                    <div class="text-block right">
                    
                                                                        <h3 class="st-title-small st-animate st-delay-short">We strive for perfection</h3>
                                                                
                                                                        <h2 class="st-title-big st-animate st-delay-medium">Perfect accuracy</h2>
                                            
                                            <p class="st-animate st-delay-long">
                            <a class="st-slide-link" href="/hli/index.php/joomla/content-component/single-article">More</a>
                        </p>
                                        </div>
                
                                    </section>

                
            </li>

                
                        
            
                        <li>
            
                
                <img class="slide-image right" src="/hli/cache/mod_st_slider/slide5a.jpg" alt="available for download at istore"/>
                
                
                <section class="container-fluid">           
                                        
                    <div class="text-block left">
                    
                                                                        <h3 class="st-title-small st-animate st-delay-short">available for download at istore</h3>
                                                                
                                                                        <h2 class="st-title-big st-animate st-delay-medium">Mobile Application</h2>
                                            
                                            <p class="st-animate st-delay-long">
                            <a class="st-slide-link" href="/hli/index.php/products-k2/categories">More</a>
                        </p>
                                        </div>
                
                                    </section>

                
            </li>

                
                        
                
                        
                
                        
                
                        
                
                    </ul>
    </div>

</div>

                </section>
                                    
                                
                                <section id="breadcrumbs">
                    <div class="container-fluid">
                        
<ul class="breadcrumb">
    <li class="you-are-here"><span>You are here: </span></li><li class="active"><span>Home</span></li></ul>

                    </div>
                </section>
                    
                
                    
                    
                                                
                <!-- Mainbody -->
                <div id="mainbody" class="clearfix">
                    <div class="container-fluid">
                        <div class="row-fluid"> 
                        
                                                            
                            <div id="content" class="span12">
                                
                                <div id="message-component">
                                    <div id="system-message-container">
    </div>

                                </div>
                            
                                                                <section id="maintop-a" class="modules-block">
                                    <div class="row-fluid"><div class="span3"><div class="module"><div class="module-content">
<div class="promo-module item-image pull-left ">
    
    <div class="item-image-wrap">
    
                <a href="/hli/index.php/products-k2/categories/wooden-parquet">
        
                            <img src="http://demo.seventhemes.com/hli/images/demo_content/image_module/1.jpg" alt="Wooden"/>
                <span class="item-image-backdrop"></span>
                
                        <div class="st-image-caption color">
            
                                <h5>Wooden                                      <span>Wall Panels (new)</span>
                                    </h5>
                            
            </div>
                
                </a>
        
    </div>
    
            
        <a href="/hli/index.php/products-k2/categories/wooden-parquet" class="st-promo-more">
        <span class="hasTooltip" title="See All Products"></span>
    </a>
        
</div>
</div></div></div><div class="span3"><div class="module"><div class="module-content">
<div class="promo-module item-image pull-left ">
    
    <div class="item-image-wrap">
    
                <a href="/hli/index.php/template/module-variations">
        
                            <img src="http://demo.seventhemes.com/hli/images/demo_content/image_module/2.jpg" alt="Tools"/>
                <span class="item-image-backdrop"></span>
                
                        <div class="st-image-caption color">
            
                                <h5>Tools                                       <span>& Accesories</span>
                                    </h5>
                            
            </div>
                
                </a>
        
    </div>
    
            
        <a href="/hli/index.php/template/module-variations" class="st-promo-more">
        <span class="hasTooltip" title="More About Tools"></span>
    </a>
        
</div>
</div></div></div><div class="span3"><div class="module"><div class="module-content">
<div class="promo-module item-image pull-left ">
    
    <div class="item-image-wrap">
    
                <a href="/hli/index.php/products-k2/categories/classic-parquet/item/67-parquet-red-oak-01">
        
                            <img src="http://demo.seventhemes.com/hli/images/demo_content/image_module/3.jpg" alt="Wooden"/>
                <span class="item-image-backdrop"></span>
                
                        <div class="st-image-caption color">
            
                                <h5>Wooden                                      <span>Floors (Featured)</span>
                                    </h5>
                            
            </div>
                
                </a>
        
    </div>
    
            
        <a href="/hli/index.php/products-k2/categories/classic-parquet/item/67-parquet-red-oak-01" class="st-promo-more">
        <span class="hasTooltip" title="Watch Product"></span>
    </a>
        
</div>
</div></div></div><div class="span3"><div class="module"><div class="module-content">
<div class="promo-module item-image pull-left ">
    
    <div class="item-image-wrap">
    
                <a href="/hli/index.php/joomla/content-component/single-article">
        
                            <img src="http://demo.seventhemes.com/hli/images/demo_content/image_module/4.jpg" alt="Finishing"/>
                <span class="item-image-backdrop"></span>
                
                        <div class="st-image-caption color">
            
                                <h5>Finishing                                       <span>Elements</span>
                                    </h5>
                            
            </div>
                
                </a>
        
    </div>
    
            
        <a href="/hli/index.php/joomla/content-component/single-article" class="st-promo-more">
        <span class="hasTooltip" title="Read More ..."></span>
    </a>
        
</div>
</div></div></div></div>
                                </section>
                                                                
                                                                <section id="maintop-b" class="modules-block">
                                    <div class="row-fluid"><div class="span3"><div class="module"><div class="module-title"><h3 class="">What Makes Us Different?</h3></div><div class="module-content">

<div class="custom"  >
    <h3>About Us</h3>
<ul>
<li><a href="#">About Company</a></li>
<li><a href="#">Press Releases</a></li>
<li><a href="#">Corporate Indentity</a></li>
<li><a href="#">History</a></li>
<li><a href="#">Contact For Media</a></li>
<li><a href="#">Inspiration</a></li>
</ul></div>
</div></div></div><div class="span3"><div class="module"><div class="module-title"><h3 class="">Contact Us</h3></div><div class="module-content">

<div class="custom"  >
    <h3>Your Brand</h3>
<p>HLI Template,       <br />Little Lonsdale St,      <br />Melbourne Victoria 8011,      <br />PO Box 21177  Australia<br /><br /><a href="/hli/index.php/contact-us">Contact Us</a></p></div>
</div></div></div><div class="span3"><div class="module"><div class="module-title"><h3 class="">Available Worldwide</h3></div><div class="module-content">

<div class="custom"  >
    <p><img class="caption pull-left" title="364 Retailers Worldwide" src="/hli/images/demo_content/world_map.png" alt="World Map" /></p></div>
</div></div></div><div class="span3"><div class="module"><div class="module-title"><h3 class="">Products Catalog '14</h3></div><div class="module-content">

<div class="custom"  >
    <h1>'2014</h1>
<p>Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without <a href="/hli/index.php/joomla/content-component/single-article">revolutionary ROI</a>.</p></div>
</div></div></div></div>
                                </section>
                                                                
                                <div id="component-area">
                                    <div class="blog-featured" itemscope itemtype="http://schema.org/Blog">




</div>

                                </div>
                                
                                    

                                    
            
                            </div>
                            
                                                    
                        </div>
                    </div>
                </div>
                <!-- End Mainbody -->
                    
                                        
                    
                <section id="bottom-bar" class="clearfix">  
                    <div class="container-fluid">
                        <div class="st-newsflash">

    <div class="module-title pull-left">
    <h3>Latst News</h3>
    </div>
    
    <div class="flex-slider-container">
        <div id="news-slider-5489c9e972b7d" class="flexslider">
                
            <ul class="slides">
                                    
                <li>
                    <p class="seven-news-text">
                
                Fusce a arcu eu lectus convallis ultricies a et nulla. Nullam consectetur nunc nec varius massa...
                                            <a class="readmore" href="/hli/news/23-first-category/34-donec-neque-metus-tempus">Read more...</a>
                                        </p>
                </li>
                
                        
                <li>
                    <p class="seven-news-text">
                
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus purus est, varius vitae blandit...
                                            <a class="readmore" href="/hli/news/21-second-category/27-nulla-pulvinar-at-interdum">Read more...</a>
                                        </p>
                </li>
                
                        
                <li>
                    <p class="seven-news-text">
                
                Nullam hendrerit egestas magna, ut dignissim leo dictum non. Aenean eu justo ipsum, quis venenatis est....
                                            <a class="readmore" href="/hli/news/21-second-category/29-class-aptent-taciti">Read more...</a>
                                        </p>
                </li>
                
                        
                <li>
                    <p class="seven-news-text">
                
                Nam scelerisque erat quis lectus gravida lobortis. Nulla dapibus ante vel elit egestas commodo...
                                            <a class="readmore" href="/hli/news/21-second-category/30-maecenas-facilisis">Read more...</a>
                                        </p>
                </li>
                
                        
                <li>
                    <p class="seven-news-text">
                
                Nunc dapibus aliquam neque, at aliquam purus vulputate eu. Curabitur rhoncus consectetur eros in...
                                            <a class="readmore" href="/hli/news/22-third-category/31-donec-dictum-nisi-eget">Read more...</a>
                                        </p>
                </li>
                
                        </ul>
            
                        <ul class="flex-direction-nav news">
                <li><a href="#" class="flex-prev flex-disabled">Previous</a></li>
                <li><a href="#" class="flex-next">Next</a></li>
            </ul>
            
        </div>
    </div>

</div>


                    </div>
                </section>
                    
                        
                                <section id="social-bar" class="clearfix">
                    <div class="container-fluid">
                        
                                                    <div class="pull-left">
                                
            <p>We have 11&#160;guests and no members online</p>


                            </div>
                                            
                                                <ul class="social-icons pull-right">
                        
                                                        <li class="icon_twitter"><a href="#" target="_blank"></a></li> 
                                                    
                                                        <li class="icon_facebook"><a href="#" target="_blank"></a></li> 
                                                        
                                                        <li class="icon_dribbble"><a href="#" target="_blank"></a></li> 
                                                        
                                                        <li class="icon_skype"><a href="#" target="_blank"></a></li> 
                                                        
                                                        <li class="icon_googleplus"><a href="#" target="_blank"></a></li> 
                                                        
                                                        
                                                        
                                                        
                                                    
                        </ul>
                                            
                    </div>
                </section>
                                
                                        
                                <footer id="footer" class="clearfix">
                    <div class="container-fluid">
                            
                                                <div class="footer-menu clearfix">
                            <div class="hidden-phone">

<div class="customhidden-phone"  >
    <div class="module-content">
<div class="custom">HLI Template,       Little Lonsdale St,      Melbourne Victoria 8011,      PO Box 21177  Australia,       (+81) 123 456 789,       <a href="/hli/index.php/contact-us">Contact Form</a></div>
</div></div>
</div>
                        </div>
                                                
                                                <p class="copyrights clearfix">
                        
                                                    Copyrights &copy; 2014 <a href="http://www.7studio.eu" target="_blank">7Studio</a>  All Rights Reserved                                             
                        </p>
                        
                    </div>
                </footer>
                                
                                <section id="to-top-bar" class="clearfix">
                    <div class="container-fluid">
                    
                                            
                                                <a href="#" id="totop" class="pull-right">&uarr;</a>
                                            
                    </div>
                </section>
                        
            <!-- End of Site Wrap -->
            </div>
                
                        
        <div class="st-body-wrap-overlay st-off-canvas-toggle"></div>
        <!-- End of Body Wrap -->
        </div>
        
                <div class="st-modal modal-box">
            <a href="#" class="modal-toggle">&#215;</a>
                    <div class="module">

                <div class="module-title">
            <h3 class="">Login Form</h3>
        </div>
                    <div class="module-content">
            <form action="/hli/" method="post" id="login-form" class="form-inline">
        <div class="userdata">
        <div id="form-login-username" class="control-group">
            <div class="controls">
                                    <div class="input-prepend">
                        <span class="add-on">
                            <span class="icon-user hasTooltip" title="User Name"></span>
                            <label for="modlgn-username" class="element-invisible">User Name</label>
                        </span>
                        <input id="modlgn-username" type="text" name="username" class="input-small" tabindex="0" size="18" placeholder="User Name" />
                    </div>
                            </div>
        </div>
        <div id="form-login-password" class="control-group">
            <div class="controls">
                                    <div class="input-prepend">
                        <span class="add-on">
                            <span class="icon-lock hasTooltip" title="Password">
                            </span>
                                <label for="modlgn-passwd" class="element-invisible">Password                           </label>
                        </span>
                        <input id="modlgn-passwd" type="password" name="password" class="input-small" tabindex="0" size="18" placeholder="Password" />
                    </div>
                            </div>
        </div>
                        <div id="form-login-remember" class="control-group checkbox">
            <label for="modlgn-remember" class="control-label">Remember Me</label> <input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes"/>
        </div>
                <div id="form-login-submit" class="control-group pull-left">
            <div class="controls">
                <button type="submit" tabindex="0" name="Submit" class="btn btn-primary">Log in</button>
            </div>
        </div>
                                        <div class="pull-left">
                    <a class="user-register-btn" href="/hli/joomla/user-component/registration-form">
                    Create an account</a>
                </div>
                
            <ul class="unstyled clearfix">
                <li>
                    <a href="/hli/joomla/user-component/username-reminder-request">
                      Forgot your username?</a>
                </li>
                <li>
                    <a href="/hli/joomla/user-component/password-reset">Forgot your password?</a>
                </li>

            </ul>
        <input type="hidden" name="option" value="com_users" />
        <input type="hidden" name="task" value="user.login" />
        <input type="hidden" name="return" value="aW5kZXgucGhwP0l0ZW1pZD0xMDE=" />
        <input type="hidden" name="3edd46099a0aacae7330f9fd7b7d4e2a" value="1" />   </div>
    </form>
            </div>
        </div>
    
        </div>
        <div class="st-modal backdrop"></div>
        
    </div>

</body>
</html>