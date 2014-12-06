<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">单页-<?php echo $form_title; ?></div>
            <br>
            <form action="<?php echo $action; ?>" method="post">
            <div class="ui form segment">
                <div class="two fields">
                    <div class="field">
                        <label>单页名称</label>
                        <div class="ui left input">
                            <?php text_tag($page, 'title', array('placeholder' => '填写分类名称')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>单页别名</label>
                        <div class="ui left input">
                            <?php text_tag($page, 'alias', array('placeholder' => '填写分类别名')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>类别</label>
                        <?php select_tag($page, 'category_id', array('list' => $page_categories, 'key' => 'id', 'val' => 'title')); ?>
                    </div>
                    <div class="field">
                        <label>模板</label>
                        <?php select_tag($page, 'part_template', array('list' => $part_templates)); ?>
                    </div>
                </div>
                <div class="field">
                    <label>内容</label>
                    <?php text_area_tag($page, 'content', array('style' => 'height: 600px; visibility:hidden;')); ?>
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