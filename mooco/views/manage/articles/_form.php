<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">文章-<?php echo $form_title; ?></div>
            <br>
            <form action="<?php echo $action; ?>" method="post">
            <div class="ui form segment">
                <div class="field">
                    <label>标题</label>
                    <div class="ui left input">
                        <?php text_tag($article, 'title', array('placeholder' => '填写标题')); ?>
                        <div class="ui corner label">
                            <i class="icon asterisk"></i>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>作者</label>
                        <div class="ui left input">
                            <?php text_tag($article, 'author', array('placeholder' => '填写作者')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>来源</label>
                        <div class="ui left input">
                            <?php text_tag($article, 'from', array('placeholder' => '填写来源')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>类别</label>
                        <?php select_tag($article, 'category_id', array('list' => $article_categories, 'key' => 'id', 'val' => 'title')); ?>
                    </div>
                    <div class="field">
                        <label>发布时间</label>
                        <div class="ui left input">
                            <?php text_tag($article, 'publish_time', array('placeholder' => '填写发布时间，如2014-09-06')); ?>
                            <div class="ui corner label">
                                <i class="icon asterish"></i>
                            </div>
                        </div>
                        <!-- <label>点击数</label>
                        <div class="ui left input">
                            <?php text_tag($article, 'click_count', array('placeholder' => '填写初始点击数')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="field">
                    <label>内容</label>
                    <?php text_area_tag($article, 'content', array('style' => 'height: 600px;visibility: hidden;')); ?>
                </div>
                <div class="ui buttons">
                    <?php ($method == 'put') ? form_put() : ''; ?>
                    <input type="submit" class="ui teal button" value="保存">
                    <div class="or"></div>
                    <input type="reset" class="ui reset button" value="重置">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>