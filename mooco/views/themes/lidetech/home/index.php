<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

   <div id="box_root" class="pageWidth">
        <div id="box_main">
            <div id="box_left">
                <div id="box_left_sub1">
                    <div id="box_left_sub1_sub1">
                        <div id="box_left_sub1_sub1_sub1">
                            <div class="columnSpace">
                                <div class="describe htmledit">
                                    <p>
                                        <a href="#">
                                            <img src="<?php theme_asset_url('/img/sub1.jpg'); ?>">
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="box_left_sub1_sub1_sub2">
                            <div class="columnSpace">
                                <div class="frontSpecifies_show">
                                    <div class="decribe htmledit">
                                        <p style="text-align: left;">
                                            <?php 
                                                $page = $this->page_model->find_by(array('alias' => 'company'));
                                            ?>
                                            <img style="width: 113px; float: left; height: 129px; margin-right: 10px;" src="<?php echo $page->fetch_image(); ?>">
                                            <?php echo truncate($page->content, 80); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="box_left_sub1_sub2">
                        <div id="box_left_sub1_sub2_sub1">
                            <div class="columnSpace">
                                <div class="describe htmledit">
                                    <p>
                                        <a href="#">
                                            <img src="<?php theme_asset_url('/img/sub2.jpg'); ?>">
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="box_left_sub1_sub2_sub2">
                            <div class="columnSpace">
                                <div class="frontNews_list">
                                    <div>
                                        <ul class="comstyle newslist">
                                        <?php
                                            $articles = $this->article_model->find_all_by_alias(array('category.alias' => 'news'));
                                            $at_count = sizeof($articles);
                                            $count = 6;
                                            for ($i = 0; $i < $count; $i++) {
                                                if ($i >= $at_count) {
                                        ?>
                                            <li class="content column-num1">
                                                <div class="newstitle">
                                                    <ul>
                                                        <li class="title">
                                                            <h3>
                                                            </h3>
                                                        </li>
                                                        <li class="date">
                                                            <span> </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="clearBoth"></li>
                                        <?php
                                                } else {
                                                $article = $articles[$i];
                                        ?>
                                            <li class="content column-num1">
                                                <div class="newstitle">
                                                    <ul>
                                                        <li class="title">
                                                            <h3>
                                                                <a href="<?php url_add_html('articles/show/' . $article->id, false); ?>"><?php echo truncate($article->title, 20); ?></a>
                                                            </h3>
                                                        </li>
                                                        <li class="date">
                                                            <span> </span>
                                                            <?php echo $article->publish_time; ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="clearBoth"></li>
                                        <?php
                                                    
                                                }
                                            }
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="box_left_sub1_sub3">
                        <div id="box_left_sub1_sub3_sub1">
                            <div class="columnSpace">
                                <div class="describe htmledit">
                                    <p>
                                        <a href="#">
                                            <img src="<?php theme_asset_url('/img/sub3.jpg'); ?>">
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="box_left_sub1_sub3_sub2">
                            <?php
                                $articles = $this->article_model->find_all_by_alias(array('category.alias' => 'knowledge'));

                                if (sizeof($articles) > 0) {
                                    $article = $articles[0];
                            ?>
                            <div id="box_left_sub1_sub3_sub2_sub1">
                                <div id="box_left_sub1_sub3_sub2_sub1_sub1">
                                    <div class="columnSpace">
                                        <div class="frontSpecifies_show">
                                            <div class="describe htmledit">
                                                <p>
                                                    <img width="119" height="79" src="<?php echo $article->fetch_image(); ?>">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="box_left_sub1_sub3_sub2_sub1_sub2">
                                    <div class="columnSpace">
                                        <div class="frontNews_list1">
                                            <div>
                                                <div class="comstyle newslist">
                                                    <li class="content column-num1">
                                                        <div class="main">
                                                            <div class="newstitle">
                                                                <ul>
                                                                    <li class="title">
                                                                        <h3>
                                                                            <a href="<?php url_add_html('articles/show/' . $article->id, false); ?>"><?php echo truncate($article->title, 12); ?></a>
                                                                        </h3>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="newslist">
                                                                <ul>
                                                                    <li class="summary">
                                                                        <h3></h3>
                                                                        <p><?php echo truncate($article->content, 30); ?></p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearBoth"></div>
                            </div>
                            <?php } ?>
                            <div id="box_left_sub1_sub3_sub2_sub2">
                                <div class="columnSpace">
                                    <div class="frontNews_list">
                                        <div>
                                            <ul class="comstyle newslist">
                                            <?php 
                                                $count = sizeof($articles) >= 3 ? 3 : sizeof($articles);
                                                for ($i = 1; $i < $count; $i++) {
                                                    $article = $articles[$i];
                                            ?>
                                                <li class="content column-num1">
                                                    <div class="newstitle">
                                                        <ul>
                                                            <li class="title">
                                                                <h3>
                                                                    <a href="<?php url_add_html('articles/show/' . $article->id, false); ?>"><?php echo truncate($article->title, 20); ?></a>
                                                                </h3>
                                                            </li>
                                                            <li class="date">
                                                                <span> </span>
                                                                <?php echo $article->publish_time; ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="clearBoth"></li>
                                            <?php
                                                }
                                            ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearBoth"></div>
                </div>
                <div id="box_left_sub2">
                    <div id="box_left_sub2_sub1">
                        <div class="columnSpace">
                            <div class="frontSpecifies_show">
                                <div class="describe htmledit">
                                    <p>
                                        <a href="">
                                            <img src="<?php theme_asset_url('/img/sub4.jpg'); ?>">
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="box_left_sub2_sub2">
                        <div class="columnSpace">
                            <div class="border_00">
                                <div class="border_00-topr">
                                    <div class="border_00_topl"> </div>
                                </div>
                                <div class="border_00-mid">
                                    <div class="borderContent">
                                        <div class="frontProducts_list">
                                            <div class="comptitle_00">
                                                <strong class="titlestyle_00">商品列表展示</strong>
                                            </div>
                                            <div class="type">
                                                <span class="sort"></span>
                                            </div>
                                            <div class="scrollable scrollliner">
                                                <ul class="owl-carousel">
                                                <?php 
                                                    $articles = $this->article_model->find_all_by_alias(array('category.alias' => 'products'));
                                                    foreach ($articles as $article) {
                                                ?>
                                                    <li class="content column-num60 conten1 cloned">
                                                        <div class="pic-module">
                                                            <div class="pic">
                                                                <a href="<?php url_add_html('articles/show/' . $article->id, false); ?>">
                                                                    <img src="<?php echo $article->fetch_image(); ?>">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="pro-module">
                                                            <ul class="basic">
                                                                <li class="code">
                                                                    <h1>
                                                                        <span>产品名称: </span>
                                                                        <strong>
                                                                            <a href="<?php url_add_html('articles/show/' . $article->id, false); ?>"> <?php echo $article->title; ?></a>
                                                                        </strong>
                                                                    </h1>
                                                                </li>
                                                            </ul>
                                                            <p class="buttonP"> </p>
                                                        </div>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div id="box_left_sub3">
                    <div id="box_left_sub3_sub1">
                        <div class="columnSpace">
                            <div class="frontSpecifies_show">
                                <div class="describe htmledit">
                                    <p>
                                        <img src="<?php theme_asset_url('/img/link.jpg'); ?>">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="box_left_sub3_sub2">
                        <div class="columnSpace">
                            <div class="frontLinks_list">
                                <ul>
                                <?php
                                    $links = $this->link_model->find_all();
                                    $count = sizeof($links) >= 5 ? 5 : sizeof($links);
                                    for ($i = 0; $i < $count; $i++) {
                                        $link = $links[$i];
                                ?>

                                    <li class="content column-num5">
                                        <p class="pic">
                                            <a href="<?php echo $link->url; ?>" target="_blank" title="<?php echo $link->description; ?>">
                                                <img src="<?php theme_asset_url('/img/sub2-4.jpg'); ?>">
                                            </a>
                                        </p>
                                        <h4>
                                            <a href="<?php echo $link->url; ?>" target="_blank" title="<?php echo $link->description; ?>"><?php echo $link->title; ?></a>
                                        </h4>
                                    </li>
                                <?php
                                    }
                                ?>
                                    <li class="clearBoth"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearBoth"></div>
                </div>
            </div>
            <div class="clearBoth"></div>
        </div>
    </div>