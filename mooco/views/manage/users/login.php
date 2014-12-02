<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>Manage - Mooco</title>

    <link rel="stylesheet" type="text/css" href="<?php asset_url('lib/semantic-ui/semantic.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php asset_url('css/mooco.css'); ?>">
</head>
<body>

    <div class="wrapper">
        <div class="ui devided padded grid">
            <div class="five wide column"></div>
            <div class="six wide column">
            <form action="<?php base_url('manage/login'); ?>" method="post">
                <div class="ui fluid error form segment">
                    <div class="ui header">登录MOOCO管理后台</div>
                    <div class="field">
                        <label>用户名</label>
                        <div class="ui left icon input">
                            <input type="text" id="username" name="username" placeholder="用户名">
                            <i class="user icon"></i>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                     <div class="field">
                        <label>密码</label>
                        <div class="ui left icon input">
                            <input type="password" id="passwd" name="passwd" placeholder="密码">
                            <i class="lock icon"></i>
                            <div class="ui corner label">
                                <i class="icon asterisk"></i>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($error) && !empty($error)) { ?>
                    <div class="ui error message">
                        <div class="header">错误</div>
                        <p><?php echo $error; ?></p>
                    </div>
                    <?php }?>
                    <input type="submit" class="ui teal submit button" value="登录">
                </div>
                </form>
            </div>
            <div class="five wide column"></div>
        </div>
    </div>

    <script type="text/javascript" src="<?php asset_url('lib/jquery/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php asset_url('lib/semantic-ui/semantic.js'); ?>"></script>
    <script type="text/javascript" src="<?php asset_url('js/mooco.js'); ?>"></script>
</body>
</html>