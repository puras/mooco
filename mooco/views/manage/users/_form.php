<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">用户-<?php echo $form_title; ?></div>
            <br>
            <form action="<?php echo $action; ?>" method="post">
            <div class="ui form segment">
                <div class="two fields">
                    <div class="field">
                        <label>用户名</label>
                        <div class="ui left input">
                            <?php text_tag($user, 'username', array('placeholder' => '填写用户名')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>昵称</label>
                        <div class="ui left input">
                            <?php text_tag($user, 'nickname', array('placeholder' => '填写昵称')); ?>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>用户组</label>
                    <?php select_tag($user, 'usergroup_id', array('list' => $usergroups, 'key' => 'id', 'val' => 'name'), array('key' => '', 'val' => '请选择用户组')); ?>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>邮箱</label>
                        <?php text_tag($user, 'email', array('placeholder' => '填写邮箱')); ?>
                    </div>
                    <div class="field">
                        <label>电话</label>
                        <?php text_tag($user, 'phone', array('placeholder' => '填写电话')); ?>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>微信</label>
                        <?php text_tag($user, 'wechat', array('placeholder' => '填写微信')); ?>
                    </div>
                    <div class="field">
                        <label>QQ</label>
                        <?php text_tag($user, 'qq', array('placeholder' => '填写QQ')); ?>
                    </div>
                </div>
                <div class="field">
                    <label>地址</label>
                        <?php text_tag($user, 'addr', array('placeholder' => '填写地址')); ?>
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