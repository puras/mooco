<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">模板管理</div>
            <br>
            <table class="ui celled striped table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>标识</th>
                        <th>名称</th>
                        <th>作者</th>
                        <th>创建时间</th>
                        <th>缩略图</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($templates as $template) {
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $template->name; ?></td>
                        <td><?php echo $template->show_name; ?></td>
                        <td><?php echo $template->author; ?></td>
                        <td><?php echo $template->created_at; ?></td>
                        <td><img src=""></td>
                        <td>
                        <?php
                            if ($template->name != $site_info->global_template) {
                                link_to("manage/template/$template->name/apply", '应用');
                            }
                        ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th colspan="7">
                            <?php link_to('/manage/template/new', '<i class="sitemap icon"></i> 添加新分类', array('class' => 'ui teal labeled icon button')); ?>
                        </th>
                    </tr>
                </tfoot> -->
            </table>
        </div>
    </div>
</div>