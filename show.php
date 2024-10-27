<!DOCTYPE html>
<html>

<head>
    <title>免费在线电影</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta name=“applicable-device” content=“pc,mobile”>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="https://laodu.laodublog.com/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://laodu.laodublog.com//apple-touch-icon.png" />
    <link rel="stylesheet" href="https://laodu.laodublog.com/piconfont.css" type="text/css" />
    <link rel="stylesheet" href="https://laodu.laodublog.com/ppstui_block-1.css" type="text/css" />
    <link rel="stylesheet" href="https://laodu.laodublog.com/pstui_block_color.css" type="text/css" />
    <link rel="stylesheet" href="https://laodu.laodublog.com/ppstui_default.css" type="text/css" />
    <script type="text/javascript" src="https://laodu.laodublog.com//statics/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://laodu.laodublog.com/pstui_default.js"></script>
    <script type="text/javascript" src="https://laodu.laodublog.com/ppstui_block.js"></script>
    <script type="text/javascript" src="https://laodu.laodublog.com/phome.js"></script>
    <script>
        var maccms = {
            "path": "",
            "mid": "1",
            "url": "vip1280.net",
            "wapurl": "vip1280.net",
            "mob_status": "2"
        };
    </script>
</head>

<body>
    <header class="stui-header__top clearfix" id="header-top">
        <div class="container">
            <div class="row">
                <div class="stui-header_bd clearfix">
                    <div class="stui-header__side">
                        <div class="stui-header__search">
                            <form method="get" action="show.php?page=1&sort_expression_id=2">
                                <input type="text" id="search" name="search" class="mac_wd form-control" value="" placeholder="请输入关键词..." />
                                <button class="submit" id="searchbutton" type="submit" name="submit">
                                    <i class="icon iconfont icon-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <ul class="stui-header__menu type-slide">
                        <li>
                            <a href="show.php?page=1&sort_expression_id=2&genres_ids=128">国产自拍</a>
                        </li>
                        <li>
                            <a href="show.php?page=1&sort_expression_id=2&genres_ids=129">亚洲有码</a>
                        </li>
                        <li>
                            <a href="show.php?page=1&sort_expression_id=2&genres_ids=130">亚洲无码</a>
                        </li>
                        <li>
                            <a href="show.php?page=1&sort_expression_id=2&genres_ids=131">成人动漫</a>
                        </li>
                        <li>
                            <a href="show.php?page=1&sort_expression_id=2&genres_ids=132">欧美情色</a>
                        </li>
                        <li>
                            <a href="show.php?page=1&sort_expression_id=2&genres_ids=133">国产AV</a>
                        </li>
                        <li>
                            <a href="show.php?page=1&sort_expression_id=2&genres_ids=134">经典三级</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <p align="center" style="color: #FF9900"></p>
    <script type="text/javascript">
        $(".stui-header__user li,.stui-header__menu li").click(function() {
            $(this).find(".dropdown").toggle();
            if (stui.browser.useragent.mobile) {
                $(".MacPlayer").toggle();
            }
        });
        if (stui.browser.useragent.mobile) {
            $(".stui-header__logo .logo").css("background", "url(https://laodu.laodublog.com/logo.png) no-repeat");
        } else {
            $(".stui-header__logo .logo").css("background", "url(https://laodu.laodublog.com/logo.png) no-repeat");
        }
    </script>
    <script>
        (function() {
            var el = document.createElement("script");
            el.src = "/js/push.js";
            el.id = "ttzz";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(el, s);
        })(window)
    </script>
    <div class="container">
        <div class="row">
            <div class="stui-pannel stui-pannel-bg clearfix">
                <div class="stui-pannel-box">
                    <div class="stui-pannel_bd">
                        <ul class="stui-vodlist clearfix">
                            <?php
                            if ($_GET['search'] !== NULL) {
                                include "plugin.php";
                                $response = search(1, 2, $_GET['search']);
                                $response = json_decode($response);
                                $count = count($response->data);
                                for ($i = 0; $i <= $count; $i++) {
                                    $id = $response->data[$i]->id;
                                    if ($id < 390000) {
                                        continue;
                                    }
                            ?>
                                    <li class="col-md-6 col-sm-4 col-xs-3">
                                        <div class="stui-vodlist__box">
                                            <?php $tp = str_replace("图片地址", $response->data[$i]->cover_image, "<a class=\"stui-vodlist__thumb lazyload\" href=\"player.php?id=ID值\" id=\"ID值\" target=\"_blank\" style=\"background-image: url('图片地址');\"><span class=\"play hidden-xs\"></span></a>");
                                            $tp = str_replace("ID值", $response->data[$i]->id, $tp);
                                            echo $tp; ?>
                                            <div class="stui-vodlist__detail">
                                                <?php $bt = str_replace("这是视频标题", $response->data[$i]->title, "<p class=\"text text-overflow text-muted hidden-xs\">这是视频标题</p>");
                                                echo $bt; ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php }
                            } else {
                                include "plugin.php";
                                $response = getlist($_GET['page'], $_GET['sort_expression_id'], $_GET['genres_ids']);
                                $response = json_decode($response);
                                $count = count($response->data);
                                for ($i = 0; $i <= $count; $i++) {
                                    $id = $response->data[$i]->id;
                                    if ($id < 390000) {
                                        continue;
                                    } ?>
                                    <li class="col-md-6 col-sm-4 col-xs-3">
                                        <div class="stui-vodlist__box">
                                            <?php $tp = str_replace("图片地址", $response->data[$i]->cover_image, "<a class=\"stui-vodlist__thumb lazyload\" href=\"player.php?id=ID值\" id=\"ID值\" target=\"_blank\" style=\"background-image: url('图片地址');\"><span class=\"play hidden-xs\"></span></a>");
                                            $tp = str_replace("ID值", $response->data[$i]->id, $tp);
                                            echo $tp;  ?>
                                            <div class="stui-vodlist__detail">
                                                <?php $bt = str_replace("这是视频标题", $response->data[$i]->title, "<p class=\"text text-overflow text-muted hidden-xs\">这是视频标题</p>");
                                                echo $bt;  ?>

                                            </div>
                                        </div>
                                    </li>
                            <?php  }
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="stui-page text-center clearfix">
                <li>
                    <a href="<?php
                                if ($_GET['search'] !== NULL) {
                                    $url = "show.php?page=" . ($_GET['page'] + 1) . "&sort_expression_id=2&title=" . $_GET['search'];
                                    echo $url;
                                } else {
                                    $url = "show.php?page=" . ($_GET['page'] + 1) . "&sort_expression_id=2&genres_ids=" . $_GET['genres_ids'];
                                    echo $url;
                                }

                                ?>">加载更多</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="stui-foot clearfix">
                <div class="col-pd text-center hidden-xs">本站提供的电影和资源均系收集于各大视频网站，本站只提供web页面服务，并不提供影片资源存储，也不参与录制、上传。</div>
                <p class="share bdsharebuttonbox text-center margin-0 hidden-sm hidden-xs"></p>
            </div>
        </div>
    </div>

</body>

</html>