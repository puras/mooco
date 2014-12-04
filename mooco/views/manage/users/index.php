<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>


<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">用户管理</div>
            <br>
            <table class="ui celled striped table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>用户名</th>
                        <th>昵称</th>
                        <th>用户组</th>
                        <th>电话</th>
                        <th>QQ</th>
                        <th>邮箱</th>
                        <th>地址</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($users as $user) {
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->nickname; ?></td>
                        <td><?php echo $user->usergroup_id; ?></td>
                        <td><?php echo $user->phone; ?></td>
                        <td><?php echo $user->qq; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->addr; ?></td>
                        <td>
                            <?php link_to("/manage/user/$user->id/edit", '修改'); ?>
                            <?php delete_to("/manage/user/$user->id", '删除'); ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="9">
                            <?php link_to('/manage/user/new', '<i class="user icon"></i> 添加用户', array('class' => 'ui teal labeled icon button')); ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>