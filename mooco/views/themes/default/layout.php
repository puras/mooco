<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title><?php echo $site_info->name; ?> - Mooco</title>

    <link rel="stylesheet" type="text/css" href="<?php theme_asset_url('lib/semantic-ui/semantic.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php theme_asset_url('lib/owl.carousel/assets/owl.carousel.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php theme_asset_url('css/homepage.css'); ?>">

    <script type="text/javascript" src="<?php theme_asset_url('lib/jquery/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('lib/semantic-ui/semantic.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('lib/owl.carousel/owl.carousel.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('lib/slider/jssor.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('lib/slider/jssor.slider.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('js/homepage.js'); ?>"></script>
</head>
<body>
    <div id="header" class="ui main top menu">
        <a href="/" class="left logo">
            <img height="65px" src="<?php theme_asset_url('img/2.jpg'); ?>">
        </a>

            <div class="right menu">
                <a href="/" class="ui active teal item">首页</a>
                <?php
                    foreach(top_menus() as $menu) {
                        $items = $menu->items;
                        if (sizeof($items) > 0) {
                            echo '<div class="ui mobile dropdown link item">' . $menu->name;
                            echo '<i class="dropdown icon"></i>';
                            echo '<div class="menu">';
                            foreach($items as $item) {
                                link_to($item->href, $item->name, array('class' => 'item', 'target' => $item->target), false);   
                            }
                            echo '</div>';
                            echo '</div>';
                        } else {
                            link_to($menu->href, $menu->name, array('class' => 'item', 'target' => $menu->target), false);   
                        }
                        // link_to($menu->href, $menu->name, array('class' => 'item', 'target' => $menu->target), false);
                    }
                ?>
            </div>
        </div>

        <!-- <div class="right menu">
            <div class="ui list">
                <a class="item" href="javascript:void(0);" onclick="set_home(this, '<?php echo $site_info->url; ?>');">
                    <i class="home icon"></i>
                    <div class="content">设为首页</div>
                </a>
                <a class="item" href="javascript:void(0);" onclick="add_favorite('<?php echo $site_info->url; ?>', '<?php echo $site_info->name; ?>');">
                    <i class="star icon"></i>
                    <div class="content">收藏本站</div>
                </a>
            </div>
        </div> -->
    <div id="wrapper" class="ui">
        <?php echo $yield; ?>
    </div>
    <div id="footer" class="ui inverted footer vertical segment">
        <div class="ui stackable center aligned page grid">
            <div class="ui row">
                <div class="ten width column">
                    <?php echo $site_info->copyright; ?>
                </div>
            </div>
            <div class="ui row">
                <div class="ten width column">
                    备案号：<?php echo $site_info->icp; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                    感谢<a href="http://mooko.net">木禾CMS</a> 专注于企业建站的CMS.
                </div>
            </div>
        </div>
    </div>
</body>

</html>
