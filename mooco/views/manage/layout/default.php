<!DOCTYPE HTML>
<html lang="en-US">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>Manage - Mooco</title>

    <link rel="stylesheet" type="text/css" href="<?php asset_url('lib/semantic-ui/semantic.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php asset_url('css/mooco.css'); ?>">
</head>
<body>
    
    <header class="ui fixed transparent main top menu">
        <a href="/" class="left logo">
            <img height="45px" src="<?php asset_url('img/logo.png'); ?>">
        </a>

        <div class="right menu">
            <div class="ui dropdown item">
                <div class="ui menu">
                    <div class="item">注销账号</div>
                </div>
                <img class="ui avatar image" src="<?php asset_url('img/avatar-default.gif'); ?>" />
                欢迎，Puras.He
                <i id="user-dropdown" class="dropdown icon"></i>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="ui devided padded grid">
            <div class="three wide column">
                <div class="ui teal vertical menu">
                    <a class="active item">
                        <i class="home icon"></i>
                        主页
                    </a>
                    <div class="item">
                        <i class="content icon"></i>
                        内容管理
                        <div class="menu">
                            <?php link_to('manage/articles', '文章管理', array('class' => 'item')); ?>
                            <?php link_to('manage/pages', '单页管理', array('class' => 'item')); ?>
                            <?php link_to('manage/links', '链接管理', array('class' => 'item')); ?>
                            <?php link_to('manage/guest_books', '留言板', array('class' => 'item')); ?>
                        </div>
                    </div>
                    <div class="item">
                        <i class="sitemap icon"></i>
                        <b>分类管理</b>
                        <div class="menu">
                            <?php link_to('manage/article_cates', '文章分类', array('class' => 'item')); ?>
                            <?php link_to('manage/page_cates', '单页分类', array('class' => 'item')); ?>
                            <?php link_to('manage/link_cates', '链接分类', array('class' => 'item')); ?>
                        </div>
                    </div>
                    <div class="item">
                        <i class="user icon"></i>
                        用户管理 
                        <div class="menu">
                            <?php link_to('manage/users', '用户管理', array('class' => 'item')); ?>
                            <?php link_to('manage/usergroups', '用户组管理', array('class' => 'item')); ?> 
                        </div>
                    </div>
                    <div class="item">
                        <i class="cogs icon"></i>
                        系统管理
                        <div class="menu">
                            <?php link_to('manage/site_info', '基本信息', array('class' => 'item')); ?>
                            <?php link_to('manage/site_info/seo', 'SEO设置', array('class' => 'item')); ?>
                            <?php link_to('manage/templates', '模板管理', array('class' => 'item')); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thirteen wide column">
                    <?php echo $yield; ?>
            </div>
        </div>
    </div>

    <div class="ui inverted footer vertical segment">
        <div class="ui stackable center aligned page grid">
            <div class="ten wide column">
                Copyright MOOKO.NET 2014. All Rights Reserved.
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php asset_url('lib/jquery/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php asset_url('lib/semantic-ui/semantic.js'); ?>"></script>
    <script type="text/javascript" src="<?php asset_url('js/mooco.js'); ?>"></script>
</body>
</html>