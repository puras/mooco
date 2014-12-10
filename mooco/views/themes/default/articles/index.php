<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="ui devided padded grid">
    <div class="three wide column">
        <div class="ui teal vertical pointing menu">
        <?php
            $active = '';
            if ($parent_category->id == $article_category->id) $active = 'active';
            link_to(url_add_html('/articles/' . $parent_category->id, true), $parent_category->title, array('class' => "$active item"), false);
        ?>
            <!-- <div class="menu"> -->
        <?php
            foreach($article_categories as $ac) {
                if ($ac->id == $article_category->id) {
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
                        <div class="ui very relaxed divided list">
                            <?php 
                                foreach($articles as $article) {
                            ?>
                            <div class="item">
                                <i class="star icon"></i>
                                <div class="content">
                                    <a class="header">
                                        <?php link_to(url_add_html("articles/show/$article->id", true), $article->title, array(), false); ?>
                                    </a>
                                    <div class="description">
                                        <?php echo $article->publish_time; ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        作者：<?php echo $article->author; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                                } 
                            ?> 
                        </div>
                    
                    </div>
                </div>
            </div>
    </div>
</div>