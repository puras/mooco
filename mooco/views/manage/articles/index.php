<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">文章管理</div>
            <br>
            <table class="ui celled striped table">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>分类</th>
                        <th>标题</th>
                        <th>作者</th>
                        <th>点击数</th>
                        <th>发表日期</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($articles as $article) {
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $article->category_id; ?></td>
                        <td><?php echo $article->title; ?></td>
                        <td><?php echo $article->author; ?></td>
                        <td><?php echo $article->click_count; ?></td>
                        <td><?php echo $article->publish_time; ?></td>
                        <td>
                            <?php link_to("/manage/article/$article->id/edit", '修改'); ?>
                            <?php delete_to("/manage/article/$article->id", '删除'); ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="7">
                            <?php link_to('/manage/article/new', '<i class="content icon"></i> 添加新文章', array('class' => 'ui teal labeled icon button')); ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>