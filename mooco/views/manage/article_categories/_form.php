<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">文章分类-<?php echo $form_title; ?></div>
            <br>
            <form action="<?php echo $action; ?>" method="post">
            <div class="ui form segment">
                <div class="two fields">
                    <div class="field">
                        <label>分类名称</label>
                        <div class="ui left input">
                            <?php text_tag($article_category, 'title', array('placeholder' => '填写分类名称')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>分类别名</label>
                        <div class="ui left input">
                            <?php text_tag($article_category, 'alias', array('placeholder' => '填写分类别名')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>父分类</label>
                        <?php select_tag($article_category, 'parent_id', array('list' => $article_categories, 'key' => 'id', 'val' => 'title'), array('key' => '0', 'val' => '根分类')); ?>
                    </div>
                    <div class="field">
                        <label>分类模板</label>
                        <?php select_tag($article_category, 'part_template', array('list' => $templates)); ?>
                    </div>
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