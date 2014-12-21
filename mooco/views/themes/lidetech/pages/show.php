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
                                            <?php echo $page->parent->title; ?></a>
                                        </strong>
                                    </div>
                                    <div class="menu-first">
                                        <ul>
                                        <?php
                                            foreach($pages as $pg) {
                                        ?>
                                            <li class="menu-none">
                                                <a href="<?php url_add_html('/pages/show/' . $pg->id); ?>" class="menu-text1">
                                                    <?php echo $pg->title; ?>
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
                                        <strong class="titlestyle_03"><?php echo $page->title; ?></strong>
                                    </div>
                                    <div id="newsdetailshow">
                                        <div class="summary"> </div>
                                        <div id="infoContent" class="describe htmledit">
                                            <?php echo $page->content; ?>
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