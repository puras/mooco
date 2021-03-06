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
                        <th>排序</th>
                        <th>ID</th>
                        <th>名称</th>
                        <th>别名</th>
                        <th>模板</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($article_categories as $article_category) {
                ?>
                    <tr>
                        <td></td>
                        <td><?php echo $article_category->order; ?></td>
                        <td><?php echo $article_category->id; ?></td>
                        <td><?php echo $article_category->title; ?></td>
                        <td><?php echo $article_category->alias; ?></td>
                        <td><?php echo $article_category->part_template; ?></td>
                        <td>
                            <?php link_to("/manage/article_category/$article_category->id/edit", '修改'); ?>
                            <?php delete_to("/manage/article_category/$article_category->id", '删除'); ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="7">
                            <?php link_to('/manage/article_category/new', '<i class="sitemap icon"></i> 添加新分类', array('class' => 'ui teal labeled icon button')); ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>