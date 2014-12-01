<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="ui two column relaxed grid">
    <div class="column">
        <div class="ui piled segment">
            <div class="ui ribbon label">服务器信息</div>
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
    <div class="column">
        <div class="ui piled segment">
            <div class="ui ribbon label">管理员</div>
            <br>
            <table class="ui celled striped table">
                <tbody>
                    <tr>
                        <td>当前账号</td>
                        <td>puras</td>
                    </tr>
                    <tr>
                        <td>所属用户组</td>
                        <td>超级管理员</td>
                    </tr>
                    <tr>
                        <td>登录IP</td>
                        <td>127.0.0.1</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="center"><?php link_to('', '修改密码'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="ui two column relaxed grid">
    <div class="column">
        <div class="ui piled segment">
            <div class="ui ribbon label">平台信息</div>
            <br>
            <table class="ui celled striped table">
                <tbody>
                    <tr>
                        <td>网站名称</td>
                        <td>MooCO内容管理系统</td>
                    </tr>
                    <tr>
                        <td>网站域名</td>
                        <td>http://mooco.mooko.net</td>
                    </tr>
                    <tr>
                        <td>网站IP</td>
                        <td>192.168.1.1</td>
                    </tr>
                    <tr>
                        <td>版本</td>
                        <td>V 0.1.0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="column">
        <div class="ui piled segment">
            <div class="ui ribbon label">其他信息</div>
            <br>
            <table class="ui celled striped table">
                <tbody>
                    <tr>
                        <td>授权信息</td>
                        <td>暂无</td>
                    </tr>
                    <tr>
                        <td>版权所有</td>
                        <td>Mooko Team</td>
                    </tr>
                    <tr>
                        <td>联系邮箱</td>
                        <td><?php link_to('mailto:he@puras.me', 'he@puras.me'); ?></td>
                    </tr>
                    <tr>
                        <td>咨询网站</td>
                        <td><?php link_to('http://mooko.net', 'http://mooko.net'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
