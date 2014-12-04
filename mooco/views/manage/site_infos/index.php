<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">基本信息</div>
            <br>
            <form action="" method="post">
            <div class="ui form segment">
                <div class="two fields">
                    <div class="field">
                        <label>网站名称</label>
                        <div class="ui left input">
                            <?php text_tag($site_info, 'name', array('placeholder' => '填写网站名称')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>网址</label>
                        <div class="ui left input">
                            <?php text_tag($site_info, 'url', array('placeholder' => '填写网址')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="field">
                    <label>地址</label>
                    <div class="ui left input">
                        <?php text_tag($site_info, 'address', array('placeholder' => '填写地址')); ?>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>联系人</label>
                        <div class="ui left input">
                            <?php text_tag($site_info, 'contacter', array('placeholder' => '填写联系人')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>邮箱</label>
                        <div class="ui left input">
                            <?php text_tag($site_info, 'email', array('placeholder' => '填写邮箱')); ?>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>电话</label>
                        <div class="ui left input">
                            <?php text_tag($site_info, 'phone', array('placeholder' => '填写电话')); ?>
                        </div>
                    </div>
                    <div class="field">
                        <label>手机号</label>
                        <div class="ui left input">
                            <?php text_tag($site_info, 'mobile', array('placeholder' => '填写手机号')); ?>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>版权信息</label>
                    <div class="ui left input">
                        <?php text_tag($site_info, 'copyright', array('placeholder' => '填写版权信息')); ?>
                    </div>
                </div>
                <div class="field">
                    <label>ICP备案信息</label>
                    <div class="ui left input">
                        <?php text_tag($site_info, 'icp', array('placeholder' => '填写ICP备案信息')); ?>
                    </div>
                </div>
                <div class="field">
                    <label>第三方脚本</label>
                    <div class="ui left input">
                        <?php text_area_tag($site_info, 'third_js', array('placeholder' => '填写第三方脚本')); ?>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>是否关闭</label>
                        <div class="ui left input">
                            <?php select_tag($site_info, 'is_close', array('list' => array(array('1', '是'), array('0', '否'))), false); ?>
                        </div>
                    </div>
                    <div class="field">
                        <label>关闭原因</label>
                        <div class="ui left input">
                            <?php text_area_tag($site_info, 'close_reason', array('placeholder' => '填写关闭原因')); ?>
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