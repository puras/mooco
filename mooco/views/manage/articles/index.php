<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui one column relaxed grid">
    <div class="column">
        <div class="ui segment">
            <div class="ui ribbon label">文章管理文章管理文章管理文章管理</div>
            <br>
            <table class="ui celled striped table">
                <tbody>
                    <tr>
                        <td>服务器环境</td>
                        <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
                    </tr>
                    <tr>
                        <td>服务器域名</td>
                        <td><?php echo $_SERVER['HTTP_HOST']; ?></td>
                    </tr>
                    <tr>
                        <td>脚本语言</td>
                        <td><?php echo 'PHP'.PHP_VERSION; ?></td>
                    </tr>
                    <tr>
                        <td>数据库</td>
                        <td><?php echo 'MySQL'.$this->db->version(); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>