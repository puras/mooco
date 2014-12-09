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
    <link rel="stylesheet" type="text/css" href="<?php theme_asset_url('css/homepage.css'); ?>">

    <script type="text/javascript" src="<?php theme_asset_url('lib/jquery/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('lib/semantic-ui/semantic.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('lib/myfocus/myfocus-2.0.4.full.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('js/homepage.js'); ?>"></script>
</head>
<body>
    <div id="header" class="ui main top menu">
        <a href="/" class="left logo">
            <img height="45px" src="<?php theme_asset_url('img/logo.png'); ?>">
        </a>

        <div class="menu_nav">
            <div class="left menu">
                <a href="/" class="ui item">首页</a>
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

        <div class="right menu">
            <div class="ui list">
                <a class="item">
                    <i class="home icon"></i>
                    <div class="content">设为首页</div>
                </a>
                <a class="item">
                    <i class="star icon"></i>
                    <div class="content">收藏本站</div>
                </a>
            </div>
        </div>
    </div>
    <div id="wrapper" class="ui">
        <div class="ui aligned page grid">
            <div class="row">
                <div class="sixteen wide column">
                <?php echo $yield; ?>
                </div>
            </div>
        </div>
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
