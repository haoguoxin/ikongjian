<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>首页</title>
    <link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>ikongjian/css.css"/>
    <script type="text/javascript" src="<?php echo JS_PATH;?>ikongjian/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>ikongjian/cookie.utils.js"></script>
    <!--<script type="text/javascript" src="<?php echo JS_PATH;?>ikongjian/head.areas.js"></script>-->
    <script type="text/javascript" src="<?php echo JS_PATH;?>ikongjian/head.nav.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>ikongjian/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>ikongjian/right.float.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>ikongjian/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>ikongjian/js.js"></script>
</head>

<body>
<!--头部-->
<div class="head">
    <div class="headCenter">
        <!--城市切换-->
        <div class="headArea"></div>
        <!--登录注册 -->
        <div class="headFunction"></div>
    </div>
</div>
<!--导航-->
<div class="nav">
    <div class="navCenter">
        <!--LOGO-->
        <h1 class="logo"> <a href="/"> <img class="logoImg" src="<?php echo IMG_PATH;?>ikongjian/images/nav_logo.png" alt="爱空间"> <img src="<?php echo IMG_PATH;?>ikongjian/images/nav_biaoyu.png" alt="爱空间解放一代年轻人"> </a> </h1>
        <!--NAV-->
        <ul class="navList">
            <li><a href="/">首页</a></li>
            <li><a href="xftc.html">新房套餐</a></li>
            <li><a href="jftc.html">旧房套餐</a></li>
            <li><a href="zbt.html">直播厅</a></li>
            <li><a href="tyg.html">3D体验馆</a></li>
            <li><a class="design" href="ysj.html">云设计<span></span></a></li>
            <li><a href="zxkt.html" class="dis">装修课堂</a> </li>
            <li><a href="kjyj.html">空间易家</a></li>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
        <div class="subnav">
            <div class="navlistson">
                <ul>
                    <li><a href="zxzx.html">装修资讯</a></li>
                    <li><a href="xzx.html">学装修</a></li>
                    <li><a href="zxnxse.html">装修那些事儿</a></li>
                    <li><a href="ljl.html">来交流</a></li>
                    <li><a href="zt.html">专题</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="bk">
    <div class="bk1">
        <div class="bk1_1">
            <ul>
                <li>
                    <div class="bk1_1_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/bk1_1.jpg" width="212px" height="120px" /></a></div>
                    <div class="bk1_1_2"><a href="">新闻</a></div>
                    <div class="bk1_1_3">
                        <div class="bk1_1_3_1">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=691d811e4bbf7b8a35c5b49fec32c5ea&action=category&catid=301&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'301','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <span><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></span>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
                <li>
                    <div class="bk1_1_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/bk1_2.jpg" width="212px" height="120px" /></a></div>
                    <div class="bk1_1_2"><a href="">学装修</a></div>
                    <div class="bk1_1_3">
                        <div class="bk1_1_3_1"> <span><a href="">装修</a></span><span><a href="">设计</a></span><span><a href="">风水</a></span><span><a href="">建材</a></span> </div>
                    </div>
                </li>
                <li>
                    <div class="bk1_1_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/bk1_3.jpg" width="212px" height="120px" /></a></div>
                    <div class="bk1_1_2"><a href="">那些事</a></div>
                    <div class="bk1_1_3">
                        <div class="bk1_1_3_1"> <span><a href="">学装修</a></span><span><a href="">奇葩事</a></span><span><a href="">后悔事</a></span><span><a href="">真相君</a></span> </div>
                    </div>
                </li>
                <li>
                    <div class="bk1_1_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/bk1_4.jpg" width="212px" height="120px" /></a></div>
                    <div class="bk1_1_2"><a href="">来交流</a></div>
                    <div class="bk1_1_3">
                        <div class="bk1_1_3_1"> <span><a href="">装修流程</a></span><span><a href="">家居产品</a></span><span><a href="">装修材料</a></span><span><a href="">公装设计</a></span> <span><a href="">家装设计</a></span></div>
                    </div>
                </li>
                <li class="mrn">
                    <div class="bk1_1_1"><a href=""><img src="<?php echo IMG_PATH;?>ikongjian/images/bk1_5.jpg" width="212px" height="120px" /></a></div>
                    <div class="bk1_1_2"><a href="">专题</a></div>
                    <div class="bk1_1_3">
                        <div class="bk1_1_3_1"> <span><a href="">装修设计</a></span><span><a href="">建材选购</a></span><span><a href="">家具家电</a></span><span><a href="">风水布局</a></span> </div>
                    </div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>