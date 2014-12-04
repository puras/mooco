<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>


<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">用户组管理</div>
            <br>
            <table class="ui celled striped table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>ID</th>
                        <th>名称</th>
                        <th>类型</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($usergroups as $usergroup) {
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $usergroup->id; ?></td>
                        <td><?php echo $usergroup->name; ?></td>
                        <td><?php echo $usergroup->type; ?></td>
                        <td>
                            <?php link_to("/manage/usergroup/$usergroup->id/edit", '修改'); ?>
                            <?php delete_to("/manage/usergroup/$usergroup->id", '删除'); ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="7">
                            <?php link_to('/manage/usergroup/new', '<i class="user icon"></i> 添加新用户组', array('class' => 'ui teal labeled icon button')); ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>