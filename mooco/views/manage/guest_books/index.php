<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">留言列表</div>
            <br>
            <table class="ui celled striped table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>ID</th>
                        <th>标题</th>
                        <th>联系人</th>
                        <th>电话</th>
                        <th>手机</th>
                        <th>邮箱</th>
                        <th>是否审核</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($guest_books as $guest_book) {
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $guest_book->order; ?></td>
                        <td><?php echo $guest_book->id; ?></td>
                        <td><?php echo $guest_book->title; ?></td>
                        <td><?php echo $guest_book->alias; ?></td>
                        <td><?php echo $guest_book->part_template; ?></td>
                        <td>
                            <?php link_to("/manage/guest_book/$guest_book->id/edit", '修改'); ?>
                            <?php delete_to("/manage/guest_book/$guest_book->id", '删除'); ?>
                            <?php
                            if ($guest_book->is_agreed == 0) {
                                link_to("/manage/guest_book/$guest_book->id/agree", '审核');
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>