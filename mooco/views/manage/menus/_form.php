<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">文章分类-<?php echo $form_title; ?></div>
            <br>
            <form action="<?php echo $action; ?>" method="post">
            <div class="ui form segment">
                <div class="field">
                    <label>菜单名称</label>
                    <div class="ui left input">
                        <?php text_tag($menu, 'name', array('placeholder' => '填写菜单名称')); ?>
                        <div class="ui corner label">
                            <i class="icon asterisk"></i>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>菜单类型</label>
                        <div class="ui left input">
                            <?php
                                select_tag($menu, 'type',
                                    array('list' => $types), 
                                    array('key' => '', 'val' => '请选择'), 
                                    array('onchange' => 'change_type();'));
                            ?>
                        </div>
                    </div>
                    <div class="field">
                        <label>&nbsp;</label>
                        <div class="ui left input">
                            <?php select_tag($menu, 'key_id', array(), false, array('style' => 'display: none;')); ?>
                            <input type="hidden" id="old_key_id" name="old_key_id" value="<?php echo $menu->key_id; ?>">
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>目标</label>
                        <?php select_tag($menu, 'target', array('list' => $targets)); ?>
                    </div>
                    <div class="field">
                        <label>父菜单</label>
                        <?php select_tag($menu, 'parent_id', array('list' => $menus, 'key' => 'id', 'val' => 'name'), array('key' => '0', 'val' => '根菜单')); ?>
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