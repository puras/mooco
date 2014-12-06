<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">单页管理</div>
            <br>
            <table class="ui celled striped table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>分类</th>
                        <th>ID</th>
                        <th>标题</th>
                        <th>别名</th>
                        <th>模板</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($pages as $page) {
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $page->category_id; ?></td>
                        <td><?php echo $page->id; ?></td>
                        <td><?php echo $page->title; ?></td>
                        <td><?php echo $page->alias; ?></td>
                        <td><?php echo $page->part_template; ?></td>
                        <td>
                            <?php link_to("/manage/page/$page->id/edit", '修改'); ?>
                            <?php delete_to("/manage/page/$page->id", '删除'); ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="7">
                            <?php link_to('/manage/page/new', '<i class="content icon"></i> 添加新单页', array('class' => 'ui teal labeled icon button')); ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>