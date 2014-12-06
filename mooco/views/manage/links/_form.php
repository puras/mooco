<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">链接-<?php echo $form_title; ?></div>
            <br>
            <form action="<?php echo $action; ?>" method="post">
            <div class="ui form segment">
                <div class="two fields">
                    <div class="field">
                        <label>链接名称</label>
                        <div class="ui left input">
                            <?php text_tag($link, 'title', array('placeholder' => '填写名称')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>链接</label>
                        <div class="ui left input">
                            <?php text_tag($link, 'url', array('placeholder' => '填写链接')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>类别</label>
                        <?php select_tag($link, 'category_id', array('list' => $link_categories, 'key' => 'id', 'val' => 'title')); ?>
                    </div>
                    <div class="field">
                        <label>描述</label>
                        <?php text_area_tag($link, 'description', array('cols' => '50', 'rows' => '5')); ?>
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