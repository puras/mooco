<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" ></meta>
    <title><?php echo $name; ?></title>
    <style type="text/css">
    body.error {
        margin: 0;
        padding: 0;
        text-align: center;
        background: url("<?php theme_asset_url('img/always_grey.png'); ?>") repeat scroll 0 0 rgba(68, 68, 68, 0.9);
    }
    body.error .logo h1 {
        color: #ffffff;
        font-size: 100px;
        text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.15);
    }
    .text-muted {
        color: #999;
    }
    .lead {
        font-size: 26px;
        font-weight: 200;
        line-height: 1.4;
        margin-bottom: 20px;
    }
    </style>
</head>
<body class="error">
    <div class="logo">
        <h1>Ooo...</h1>
    </div>
    <p class="lead text-muted"><?php echo $close_reason; ?></p>
</body>
</html>  