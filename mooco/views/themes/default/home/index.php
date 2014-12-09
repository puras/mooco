<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- <div class="ui one column relaxed grid"> -->
<div class="ui segment">
    <div class="ui stackable center aligned page grid">
        <div class="ui row">
            <div class="ten width column">
                <div id="img_box">
                    <div class="loading"><img src="<?php theme_asset_url('img/loading.gif'); ?>" alt="请稍候..."></div>
                    <div class="pic">
                        <ul>
                            <li><img src="<?php theme_asset_url('img/1.jpg'); ?>" alt="标题1" text="adasfdsafsfsdf1"></li>
                            <li><img src="<?php theme_asset_url('img/2.jpg'); ?>" alt="标题2" text="adasfdsafsfsdf2"></li>
                            <li><img src="<?php theme_asset_url('img/3.jpg'); ?>" alt="标题3" text="adasfdsafsfsdf3"></li>
                            <li><img src="<?php theme_asset_url('img/4.jpg'); ?>" alt="标题4" text="adasfdsafsfsdf4"></li>
                            <li><img src="<?php theme_asset_url('img/5.jpg'); ?>" alt="标题5" text="adasfdsafsfsdf5"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui two column relaxed grid">
    <div class="column">
        <div class="ui piled segment">
            <div class="ui ribbon label teal">公司动态</div>
            <br>
            <div class="ui list">
            <?php
                $articles = $this->article_model->find_all_by_alias(array('category.alias' => 'news'));
                $at_count = sizeof($articles);
                $count = 5;
                for($i = 0; $i < $count; $i++) {
                    if ($i >= $at_count) {
            ?>
                <a class="item">&nbsp;</a>
            <?php
                    } else {
                        $article = $articles[$i];
            ?>
                <a class="item">
                    <i class="star icon"></i>
                    <div class="content"><?php echo truncate($article->title, 20); ?></div>
                </a>
            <?php
                    }
                }
            ?>
            </div>
            <br>
            <div class="ui bottom right attached label">
                <?php link_to('', '&gt;&gt;了解更多'); ?>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="ui piled segment">
            <div class="ui ribbon label teal">植保知识</div>
            <br>
            <div class="ui list">
            <?php
                $articles = $this->article_model->find_all_by_alias(array('category.alias' => 'knowledge'));
                $at_count = sizeof($articles);
                $count = 5;
                for($i = 0; $i < $count; $i++) {
                    if ($i >= $at_count) {
            ?>
                <a class="item">&nbsp;</a>
            <?php
                    } else {
                        $article = $articles[$i];
            ?>
                <a class="item">
                    <i class="star icon"></i>
                    <div class="content"><?php echo truncate($article->title, 20); ?></div>
                </a>
            <?php
                    }
                }
            ?>
            </div>
            <br>
            <div class="ui bottom right attached label">
                <?php link_to('', '&gt;&gt;了解更多'); ?>
            </div>
        </div>
    </div>
</div>
<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
           <div class="ui medium images">
               <img src="<?php theme_asset_url('img/1.jpg'); ?>">
               <img src="<?php theme_asset_url('img/2.jpg'); ?>">
               <img src="<?php theme_asset_url('img/3.jpg'); ?>">
           </div>
        </div>
    </div>
</div>
<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui piled segment">
            <div class="ui ribbon label teal">公司简介</div>
            <br><br>
            <p>
            <?php 
                $page = $this->page_model->find_by(array('alias' => 'company'));
                // echo truncate($page->content, 200);
                echo $page->content;
            ?>
            </p>
            <div class="ui bottom right attached label">
                <?php link_to('', '&gt;&gt;了解更多'); ?>
            </div>
        </div>
    </div>
</div>