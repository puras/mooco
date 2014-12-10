<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="ui devided padded grid">
    <div class="three wide column">
        <div class="ui teal vertical pointing menu">
        <?php
            $active = '';
            if ($parent_category->id == $article->category_id) $active = 'active';
            link_to(url_add_html('/articles/' . $parent_category->id, true), $parent_category->title, array('class' => "$active item"), false);
        ?>
            <!-- <div class="menu"> -->
        <?php
            foreach($article_categories as $ac) {
                if ($ac->id == $article->category_id) {
                    link_to(url_add_html('/articles/' . $ac->id, true), '&nbsp;&nbsp;' . $ac->title, array('class' => 'active item'), false);
                } else {
                    link_to(url_add_html('/articles/' . $ac->id, true), '&nbsp;&nbsp;' . $ac->title, array('class' => 'item'), false);
                }
            }
        ?>
            <!-- </div> -->
        </div>
    </div>
    <div class="thirteen wide column">
        <div class="ui one column relaxed grid">
                <div class="column">
                    <div class="ui segment">
                        <h1 class="ui header"><?php echo $article->title; ?></h1>
                        <div class="sub header">
                            <i class="user icon"></i>
                            作者: <?php echo $article->author; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="home icon"></i>
                            来源: <?php echo $article->from; ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="home icon"></i>
                            发布时间: <?php echo $article->publish_time; ?>
                        </div>
                        <div class="article_content">
                            <?php echo $article->content; ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>