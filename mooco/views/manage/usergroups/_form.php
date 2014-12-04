<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">用户组-<?php echo $form_title; ?></div>
            <br>
            <form action="<?php echo $action; ?>" method="post">
            <div class="ui form segment">
                <div class="field">
                    <label>用户组名称</label>
                    <div class="ui left input">
                        <?php text_tag($usergroup, 'name', array('placeholder' => '填写用户组名称')); ?>
                        <div class="ui corner label">
                            <i class="icon asterisk"></i>
                        </div>
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