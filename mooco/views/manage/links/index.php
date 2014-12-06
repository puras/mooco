<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">文章分类管理</div>
            <br>
            <table class="ui celled striped table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>分类</th>
                        <th>ID</th>
                        <th>名称</th>
                        <th>链接</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($links as $link) {
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $link->cate_id; ?></td>
                        <td><?php echo $link->id; ?></td>
                        <td><?php echo $link->title; ?></td>
                        <td><?php echo $link->url; ?></td>
                        <td>
                            <?php link_to("/manage/link/$link->id/edit", '修改'); ?>
                            <?php delete_to("/manage/link/$link->id", '删除'); ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="7">
                            <?php link_to('/manage/link/new', '<i class="content icon"></i> 添加新链接', array('class' => 'ui teal labeled icon button')); ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>