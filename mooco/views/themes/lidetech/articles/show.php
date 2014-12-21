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
                                                <a href="<?php url_add_html('/articles/' . $ac->id); ?>" class="menu-text1">
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
                                <div class="frontNews_detail">
                                    <div class="comptitle_03">
                                        <strong class="titlestyle_03">详细信息</strong>
                                    </div>
                                    <div id="newsdetailshow">
                                        <h2><?php echo $article->title; ?></h2>
                                        <div class="message">
                                            <span class="author">
                                                <em>作者：</em>
                                                <?php echo $article->author; ?>
                                            </span>
                                            <span class="source">
                                                <em>来源：</em>
                                                <?php echo $article->from; ?>
                                            </span>
                                            <span class="date">
                                                <em>日期：</em>
                                                <?php echo $article->publish_time; ?>
                                            </span>
                                        </div>
                                        <div class="summary"> </div>
                                        <div id="infoContent" class="describe htmledit">
                                            <?php echo $article->content; ?>
                                        </div>
                                        <p> </p>
                                        <!-- <div class="operate"></div>
                                        <div class="page">
                                            <p class="pre">
                                                <span>上一篇：</span>
                                                <span id="preInfo">
                                                    <a href="javascript:void(0);">聚焦产品，聚焦客户 ——陕西美邦农药有限公司冬训纪实</a>
                                                </span>
                                            </p>
                                            <p class="next">
                                                <span>下一篇：</span>
                                                <span id="nextInfo">无</span>
                                            </p>
                                        </div> -->
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