<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">SEO设置</div>
            <br>
            <form action="" method="post">
            <div class="ui form segment">
                <div class="field">
                    <label>关键字</label>
                    <div class="ui left input">
                        <?php text_area_tag($site_seo, 'key_words', array('cols' => '50', 'rows' => '5', 'placeholder' => '填写网站关键字')); ?>
                        <div class="ui corner label">
                            <i class="icon asterisk"></i>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>描述</label>
                    <div class="ui left input">
                        <?php text_area_tag($site_seo, 'description', array('cols' => '50', 'rows' => '5', 'placeholder' => '填写网站描述')); ?>
                        <div class="ui corner label">
                            <i class="icon asterisk"></i>
                        </div>
                    </div>
                </div>
                
                <div class="ui buttons">
                    <input type="submit" class="ui teal button" value="保存">
                    <div class="or"></div>
                    <input type="reset" class="ui reset button" value="重置">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>