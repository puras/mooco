<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>


<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">菜单管理</div>
            <br>
            <table class="ui celled striped table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>排序</th>
                        <th>名称</th>
                        <th>类型</th>
                        <th>目标</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($menus as $menu) {
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $menu->order; ?></td>
                        <td><?php echo $menu->name; ?></td>
                        <td><?php echo $menu->type; ?></td>
                        <td><?php echo $menu->target; ?></td>
                        <td>
                            <?php link_to("/manage/menu/$menu->id/edit", '修改'); ?>
                            <?php delete_to("/manage/menu/$menu->id", '删除'); ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="7">
                            <?php link_to('/manage/menu/new', '<i class="sitemap icon"></i> 添加新菜单', array('class' => 'ui teal labeled icon button')); ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>