<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div id="box_root" class="pageWidth">
    <div id="box_main">
        <div id="list_box_left">
            <div id="list_box_left_sub1">
                <div class="columnSpace">
                    <div class="border_03">
                        <div class="border_03-topr">
                            <div class="border_03_top1"></div>
                        </div>
                        <div class="border_03-mid">
                            <div class="borderContent">
                                <div class="frontNewsCategory_tree">
                                    <div class="comptitle_03">
                                        <strong class="titlestyle_03">
                                            <a href="<?php url_add_html('/articles/' . $parent_category->id); ?>"><?php echo $parent_category->title; ?></a>
                                        </strong>
                                    </div>
                                    <div class="menu-first">
                                        <ul>
                                        <?php
                                            foreach($article_categories as $ac) {
                                        ?>
                                            <li class="menu-none">
                                                <a href="<?php url_add_html('/articles/' . $ac->id); ?>" class="menu-text1<?php if ($article_category->id == $ac->id) { echo ' current';}?>">
                                                    <?php echo $ac->title; ?>
                                                    <span></span>
                                                </a>
                                            </li>
                                        <?php
                                            }
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearBoth"></div>
                            </div>
                        </div>
                        <div class="border_03-footerr">
                            <div class="border_03-footerl"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="list_box_left_sub2">
                <div class="columnSpace">
                    <div class="border_03">
                        <div class="border_03-topr">
                            <div class="border_03-topl"></div>
                        </div>
                        <div class="border_03-mid">
                            <div class="borderContent">
                                <div class="listfrontProducts_list">
                                    <div class="comptitle_03">
                                        <strong class="titlestyle_03"><?php echo $article_category->title; ?></strong>
                                    </div>
                                    <ul class="mainul productlist-02">
                                    <?php
                                        for ($i = 0; $i < sizeof($articles); $i++) {
                                            $article = $articles[$i];
                                    ?>
                                        <li class="content column-num5">
                                            <div class="pic-module">
                                                <div class="pic">
                                                    <a href="<?php url_add_html("articles/show/$article->id"); ?>" title="<?php echo $article->title; ?>">
                                                        <img src="<?php echo $article->fetch_image(); ?>">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pro-module">
                                                <ul class="basic">
                                                    <li class="code">
                                                        <h1>
                                                            <span>产品名称：</span>
                                                            <strong>
                                                                <a href="<?php url_add_html("articles/show/$article->id"); ?>"><?php echo $article->title; ?></a>
                                                            </strong>
                                                        </h1>
                                                    </li>
                                                </ul>
                                                <p class="buttonP"> </p>
                                            </div>
                                        </li>
                                    <?php
                                            if ($i != 0 && ($i + 1) % 5 == 0) {
                                    ?>
                                        <li class="clearBoth"></li>
                                    <?php
                                            }
                                        }
                                    ?>
                                        <li class="clearBoth"></li>
                                    </ul>
                                    <div class="skip-pages">
                                        <div class="bottom">
                                            <div class="pageJump">
                                                <div class="number">
                                                    <span class="disabled">首页</span>
                                                    <span class="disabled">上一页</span>
                                                    <a href="#">下一页</a>
                                                    <a href="#">末页</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border_03-footerr">
                            <div class="border_03-footerl"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearBoth"></div>
        </div>
        <div class="clearBoth"></div>
    </div>
</div>