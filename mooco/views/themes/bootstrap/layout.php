<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo $site_seo->key_words; ?>" />
    <meta name="description" content="<?php echo $site_seo->description; ?>" />
    <meta name="generator" content="cms.mooko.net" />
    <meta name="copyright" content="<?php echo $site_info->copyright; ?>" />
    <title><?php echo $site_info->name; ?> - MooCO</title>

    <link rel="stylesheet" type="text/css" href="<?php theme_asset_url('lib/bootstrap/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php theme_asset_url('css/style.css'); ?>">
</head>
<body>
    <div id="wrapper" class="container">
        <div class="header">
            <div class="banner"></div>
            <div class="nav_menu"></div>
            <div role="navigation">
                <ul class="navbar navbar-default">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="row">
                <div class="col-lg-4">
                    a
                </div>
                <div class="col-lg-4">
                    b
                </div>
                <div class="col-lg-4">
                    c
                </div>
            </div>
        </div>
    </div>
</body>
</html>