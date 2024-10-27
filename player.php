<!DOCTYPE html>
<html>

<head>
    <title>Player</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="referrer" content="no-referrer">
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Access-Control-Allow-Credentials" content="*" />
    <meta name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="muiplayer/css/mui-player.min.css">
    <link rel="stylesheet" href="muiplayer/css/muiplayer.css">
    <style>
        body,
        html {
            font: 24px "Microsoft YaHei", Arial, Lucida Grande, Tahoma, sans-serif;
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            overflow-x: hidden;
            overflow-y: hidden;
            background-color: black;
        }

        #loading {
            background: url(https://img.zcool.cn/community/01e6e95e5b5a1da801216518e9370a.gif);
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            position: absolute;
            z-index: 10000000001;
            background-size: 100% 100%;
        }

        #error {
            background: url();
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            text-align: center;
            display: table;
            position: absolute;
            z-index: 10000000001;
            background-size: 100% 100%;
        }

        h1 {
            color: #ffffff;
            font-size: 1.2rem;
            margin: 0;
            padding: 0;
            vertical-align: middle;
            display: table-cell;
            font-family: Microsoft Jhenghei;
        }
    </style>
    <script src="muiplayer/js/jquery.min.js"></script>
    <script src="muiplayer/js/mui-player.min.js"></script>
    <script src="muiplayer/js/mui-player-desktop-plugin.min.js"></script>
    <script src="muiplayer/js/mui-player-mobile-plugin.min.js"></script>
    <script src="muiplayer/js/jquery.xctips.js"></script>
    <script src="muiplayer/js/hls.min.js"></script>
    <script src="muiplayer/js/flv.min.js"></script>
    <script src="muiplayer/js/setting.js"></script>
</head>

<body>
    <div id="loading" align="center"></div>
    <script type="text/javascript">
        <?php
        include "plugin.php";
        $res = getinfo($_GET["id"]);
        $res = json_decode($res);
        $info = array("url" => $res->data->video_url, "title" => $res->data->title);
        ?>
        var config = <?php
                        echo json_encode($info);
                        ?>;
        player(config);
    </script>
</body>

</html>