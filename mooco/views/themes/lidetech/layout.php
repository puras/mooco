<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">  
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title><?php echo $site_info->name; ?> -MooCO</title>
    <meta name="keywords" content="<?php echo $site_seo->key_words; ?>" />
    <meta name="description" content="<?php echo $site_seo->description; ?>" />
    <meta name="copyright" content="<?php echo $site_info->copyright; ?>" />
    <meta name="author" content="cms.mooko.net"/>

    <link rel="stylesheet" type="text/css" href="<?php theme_asset_url('css/lidetech.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php theme_asset_url('lib/owl.carousel/assets/owl.carousel.css'); ?>">

    <script type="text/javascript" src="<?php theme_asset_url('lib/jquery/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('lib/owl.carousel/owl.carousel.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('lib/myfocus/js/myfocus-1.2.3.full.js'); ?>"></script>
    <script type="text/javascript" src="<?php theme_asset_url('js/lidetech.js'); ?>"></script>
</head>
<body id="index">
    <!-- 头部导航开始 -->  
    <div id="box_header">
        <div id="box_header_sub1">
            <div id="box_header_sub1_sub1">
                <img src="<?php theme_asset_url('img/banner.jpg'); ?>" width="1141" height="96">
            </div>
            <div id="box_header_sub1_sub2">
                <div class="columnSpace">
                    <div class="frontColumns_navigation">
                        <div class="mattblackmenu">
                            <ul class="nav-first">
                                <li class="first"><a href="<?php echo base_url('/'); ?>">网站首页</a></li>
                            <?php
                                foreach(top_menus() as $menu) {
                                    // $items = $menu->items;
                                    echo '<li>';
                                    echo link_to($menu->href, $menu->name, array(), false);
                                    echo '</li>';
                                }
                            ?>
                                <li class="last"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="box_header_sub1_sub3">
                <div id="box_header_sub1_sub3_sub1">
                    <div class="columnSpace">
                        <div class="frontPublic_slideShow">
                            <div class="slide-contente">
                                <div class="slide-pic">
                                    <ul class="pic">
                                        <li style="display: none;"><a href="javascript:void(0);"><img src="<?php theme_asset_url('img/1.png'); ?>" alt="&nbsp;"></a></li>
                                        <li style="display: none;"><a href="javascript:void(0);"><img src="<?php theme_asset_url('img/2.png'); ?>" alt="&nbsp;"></a></li>
                                        <li style="display: none;"><a href="javascript:void(0);"><img src="<?php theme_asset_url('img/3.png'); ?>" alt="&nbsp;"></a></li>
                                        <li style="display: none;"><a href="javascript:void(0);"><img src="<?php theme_asset_url('img/4.png'); ?>" alt="&nbsp;"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 头部导航结束 --> 
    <?php echo $yield; ?>
    <div id="box_footer">
        <div id="box_footer_sub1">
            <div id="box_footer_sub1_sub1">
                <div class="columnSpace">
                    <div class="frontSpecifies_show">
                        <div class="describe htmledit">
                            <table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left;">
                                            <span style="color: #00507c;">
                                                <span style="font-size: 14px;">
                                                    <span style="font-family: 微软雅黑, tahoma, arial, sans-serif;">
                                                    <?php
                                                        $menu = $this->menu_model->find_by(array('name' => '在线留言'));
                                                    ?>
                                                        <a href="<?php echo $menu->href; ?>">
                                                            <span style="color: #00507c">
                                                                <strong><?php echo $menu->name; ?></strong>
                                                            </span>
                                                        </a>
                                                        <strong>
                                                            <font face="">&nbsp;&nbsp;|&nbsp;&nbsp;</font>
                                                        </strong>
                                                        <?php
                                                            $menu = $this->menu_model->find_by(array('name' => '公司招聘'));
                                                        ?>
                                                        <a href="<?php echo $menu->href; ?>">
                                                            <span style="color: #00507c">
                                                                <strong><?php echo $menu->name; ?></strong>
                                                            </span>
                                                        </a>
                                                        <strong>
                                                            <font face="">&nbsp;&nbsp;|&nbsp;&nbsp;</font>
                                                        </strong>
                                                        <?php
                                                            $menu = $this->menu_model->find_by(array('name' => '联系我们'));
                                                        ?>
                                                        <a href="<?php echo $menu->href; ?>">
                                                            <span style="color: #00507c">
                                                                <strong><?php echo $menu->name; ?></strong>
                                                            </span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                        </td>
                                        <td style="text-align: center;">
                                            <font face="">
                                                <span style="color: #707070;">
                                                    <span style="font-size: 12px;">
                                                        <span style="font-family: 微软雅黑, tahoma, arial, sans-serif;">
                                                            联系热线：<?php echo $site_info->phone; ?>&nbsp;&nbsp;&nbsp;&nbsp;电子邮箱：
                                                        </span>
                                                    </span>
                                                </span>
                                                <span style="font-size: 12px;">
                                                    <span style="font-family: 微软雅黑, tahoma, arial, sans-serif;">
                                                        <a href="">
                                                            <span style="color: #707070;"><?php echo $site_info->email; ?></span>
                                                        </a>
                                                    </span>
                                                </span>
                                                <span style="color: #707070;">
                                                    <span style="font-size: 12px;">
                                                        <span style="font-family: 微软雅黑, tahoma, arial, sans-serif;">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;地址：<?php echo $site_info->address; ?>
                                                        </span>
                                                    </span>
                                                </span>
                                            </font>
                                        </td>
                                        <td style="text-align: right;">
                                            <span style="color: #000000;">
                                                <span style="font-size: 12px;">
                                                    <span style="font-family: 微软雅黑, tahoma, arial, sans-serif;">
                                                        <!-- <font face="">企业CMS | 在线CMS | 企业App</font> -->
                                                    </span>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="box_footer_sub1_sub2">
                <div id="box_footer_sub1_sub2_sub1">
                    <div class="columnSpace">
                        <div class="frontSpecifies_show">
                            <div class="describe htmledit">
                                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p style="text-align: left;">
                                                    <?php echo $site_info->copyright; ?>&nbsp;&nbsp;<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $site_info->icp; ?></a><br />
                                                    <?php echo $site_info->name; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mooko.net" target="_blank">木禾软件提供技术支持</a>　　<?php link_to('/manage', '后台管理', array('target' => '_black')); ?>
                                                </p>
                                            </td>
                                            <td style="text-align: right;">
                                                <a href=""><img src="<?php theme_asset_url('img/xxx.jpg'); ?>"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="box_footer_sub1_sub2_sub2">
                    <div class="columnSpace">
                        <div class="frontSpecifies_show">
                            <div class="describe htmledit">
                                <p style="text-align: right;">
                                    请让更多的人知道我们!!!<br>
                                    Please let more people know us!!!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearBoth"></div>
            </div>
        </div>
    </div>
</body>
</html>