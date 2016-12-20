

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
        <META HTTP-EQUIV="Expires" CONTENT="0">
        <link rel="icon" type="image/ico" href="/favicon.ico"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-64695573-1', 'auto');
            ga('send', 'pageview');

            <!-- jiaxin begin -->
                (function(m, ei, q, i, a, j, s) {
                    m[i] = m[i] || function() {
                            (m[i].a = m[i].a || []).push(arguments)
                        };
                    j = ei.createElement(q), s = ei.getElementsByTagName(q)[0];
                    j.async = true;
                    j.charset = 'UTF-8';
                    j.src = 'http://web.jiaxincloud.com/mcs.js?id=y3vmmxy5edm3cw&appName=gwkf782&appChannel=20001';
                    s.parentNode.insertBefore(j, s);
                })(window, document, 'script', '_JIAXIN');_JIAXIN();
        </script>
    </head>
    <body>
    <?php $this->beginBody() ?>

        <div class="header-bar pc-header-bar">
            <div class="pc-header">
                <a href="/" class="logo"></a>
                <ul>
                    <li class="ticwatch-active _ticwear">
                        <a href="/" class="text">Ticwatch</a>
                    </li>
                    <li class="mirror-active">
                        <a href="<?=Url::to(['ticmirror/index'],false); ?>" class="text">Ticmirror</a>
                    </li>
                    <li class="download-active">
                        <a href="<?= URL::to(['site/download'],false); ?>"  class="text">应用中心</a>
                    </li>
                    <li class="kujie-active">
                        <a href="http://brand.ticwear.com/" class="text">跨界</a>
                    </li>
                   <!-- <li>
                        <a href="" class="text">服务与支持</a>
                    </li>-->
                    <li>
                        <a href="http://bbs.ticwear.com" class="text" target="_blank">社区</a>
                    </li>
                </ul>
                <a href="http://store.ticwear.com" class="other-info">
                    <i class="logo-shop"></i>
                    <span>商城</span>
                </a>
            </div>
            <div class="hover-menu-content _hover-menu-content">
                <p>
                    <a href="<?= URL::to(['ticwatch2/index'],false); ?>">Ticwatch2</a>
                    <a href="<?= URL::to(['ticwatch/ticwatch'],false); ?>" class="tic2">Ticwatch</a>
                    <a href="<?= URL::to(['ticwear/ticwear4','#' => 'ticwear'],false); ?>" class="ticwear">Ticwear</a>
                </p>
            </div>
        </div>

        <div class="header-bar pc-header-bar pc-nav-hidden">
            <div class="pc-header">
                <a href="/" class="logo"></a>
                <ul>
                    <li class="ticwatch-active _hidden-ticwear">
                        <a href="/" class="text">Ticwatch</a>
                    </li>
                    <li class="mirror-active">
                        <a href="<?=Url::to(['ticmirror/index'],false); ?>" class="text">Ticmirror</a>
                    </li>
                    <li class="download-active">
                        <a href="<?= URL::to(['site/download'],false); ?>">应用中心</a>
                    </li>
                    <li class="kujie-active">
                        <a href="http://brand.ticwear.com/" class="text">跨界</a>
                    </li>
                    <!--<li>
                        <a href="" class="text">服务与支持</a>
                    </li>-->
                    <li>
                        <a href="http://bbs.ticwear.com" class="text" target="_blank">社区</a>
                    </li>
                </ul>
                <a href="http://store.ticwear.com" class="other-info _hidden-other-info">
                    <i class="logo-shop"></i>
                    <span>商城</span>
                </a>
            </div>
            <div class="hover-menu-content _hidden-menu-content">
                <p>
                    <a href="<?= URL::to(['ticwatch2/index'],false); ?>">Ticwatch2</a>
                    <a href="<?= URL::to(['ticwatch/ticwatch'],false); ?>" class="tic2">Ticwatch</a>
                    <a href="<?= URL::to(['ticwear/ticwear4','#' => 'ticwear'],false); ?>" class="ticwear">Ticwear</a>
                </p>
            </div>
        </div>

        <div class="mobile-list _mobile-list">
            <ul class="mobile-list-menu">
            <li>
                <a href="/">首页</a>
            </li>
            <li>
                <a href="/">Ticwatch</a>
            </li>
            <li class="nav-mobile-sec">
                <a href="<?= URL::to(['ticwatch2/index'],false); ?>" class="text">Ticwatch2</a>
            </li>
            <li class="nav-mobile-sec">
                <a href="<?= URL::to(['ticwatch/ticwatch'],false); ?>" class="text">Ticwatch</a>
            </li>
            <li class="nav-mobile-sec">
                <a href="http://ticwear.com/ticwear/ticwear4.html#ticwear" class="text">Ticwear</a>
            </li>
            <li>
                <a href="<?=Url::to(['ticmirror/index'],false); ?>">Ticmirror</a>
            </li>
            <li>
                <a href="<?= URL::to(['site/download'],false); ?>">应用中心</a>
            </li>
            <li>
                <a href="http://brand.ticwear.com/">跨界</a>
            </li>
            <!--<li>
                <a href="">服务与支持</a>
            </li>-->
            <li>
                <a href="http://bbs.ticwear.com" target="_blank">社区</a>
            </li>
        </ul>
        </div>
        <div class="mobile-header-bar _mobile-header-bar">
            <div class="mobile-header">
                <div class="mobile-menu _mobile-menu"></div>
                <a href="/" class="mobile-logo">
                    <img src="<?= Url::to('@web/img/logo.png', false);?>" alt="">
                </a>
                <div class="mobile-login _active-mobile-login">
                    <a href="http://store.ticwear.com/"></a>
                </div>
            </div>
        </div>
        <div class="mobile-header-bar mobile-nav-hidden">
            <div class="mobile-header">
                <div class="mobile-menu _mobile-menu"></div>
                <a href="/" class="mobile-logo">
                    <img src="<?= Url::to('@web/img/logo.png', false);?>" alt="">
                </a>
                <div class="mobile-login _active-mobile-login">
                    <a href="http://store.ticwear.com/"></a>
                </div>
            </div>
        </div>
    <?= $content ?>
    <div class="line-border"></div>
        <div class="footer">
            <div class="section">
                <h2>了解产品</h2>
                <ul>
                    <li class="hover-button"><a href="<?= URL::to(['ticwatch/ticwatch'],false); ?>">Ticwatch</a></li>
                    <li class="hover-button"><a href="<?= URL::to(['ticwatch2/index'],false); ?>">Ticwatch2</a></li>
                    <li class="hover-button"><a href="<?=Url::to(['ticmirror/index'],false); ?>">Ticmirror</a></li>
                    <li class="hover-button"><a href="http://store.ticwear.com/pages/band" target="_blank">配件</a></li>
                </ul>
            </div>
            <div class="section">
                <h2>服务与支持</h2>
                <ul>
                    <li class="hover-button"><a href="<?=Url::to(['ticwatch/guide_2'],false); ?>">视频指导</a></li>
                    <li class="hover-button"><a href="<?=Url::to(['ticwatch/guide'],false); ?>">使用指导</a></li>
                    <li class="hover-button"><a href="http://store.ticwear.com/pages/download" target="_blank">Ticwear助手</a></li>
                    <li class="hover-button"><a href="http://store.ticwear.com/pages/aftersales" target="_blank">售后政策</a></li>
                </ul>
            </div>
            <div class="section">
                <h2>媒体中心</h2>
                <ul>
                    <li class="hover-button"><a href="http://www.chumenwenwen.com/pr/index.html" target="_blank">新闻动态</a></li>
                    <li class="hover-button"><a href="http://www.chumenwenwen.com/pr/video.html" target="_blank">产品视频</a></li>
                    <li class="hover-button"><a href="http://www.chumenwenwen.com/pr/picture.html" target="_blank">图片资源</a></li>
                    <li class="hover-button"><a href="http://www.chumenwenwen.com/pr/other.html" target="_blank">其他资源</a></li>
                </ul>
            </div>
            <div class="section">
                <h2>开发者支持</h2>
                <ul>
                    <li class="hover-button"><a href="http://developer.chumenwenwen.com" target="_blank">问问开发者平台</a></li>
                    <li class="hover-button"><a href="http://ticdesign.chumenwenwen.com/" target="_blank">TicDesign</a></li>
                </ul>
            </div>
            <div class="section">
                <h2>关于我们</h2>
                <ul>
                    <li class="hover-button"><a href="http://www.chumenwenwen.com/about/index.html" target="_blank">公司简介</a></li>
                    <li class="hover-button"><a href="http://www.chumenwenwen.com/job/index.html" target="_blank">加入我们</a></li>
                    <li class="hover-button"><a href="http://www.chumenwenwen.com/cooperation/index.html" target="_blank">联系我们</a></li>
                </ul>
            </div>
            <div class="info">
                <h2 class="phone-time">400 883 8390</h2>
                <p class="time">周一至周日 9:00-21:00(仅收市话费)</p>
                <p class="phone-time-btn" onclick="jiaxinTogglerDiv()">
                    <em>在线客服</em>
                </p>
                <ol class="link">
                    <li><a href="javascript:void(0)" class="weixin"></a></li>
                    <li><a href="http://weibo.com/chumenwenwen" class="weibo" target="_blank"></a></li>
                    <!-- <li><a href="" class="f"></a></li>
                    <li><a href="" class="twi"></a></li>
                    <li><a href="" class="cam"></a></li>-->
                </ol>
            </div>
            <div class="test">
                <span class="bot"></span>
                <span class="top"></span>
                <img src="/img/code.png"  class="code-img">
                <div class="weixin-txt">
                    <p class="weixin-title">Ticwatch微信订阅号</p>
                    <p>版本升级、功能更新、<br>优惠活动等讯息第一时间掌握。</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="service-info">
                <span class="company">Copyright © 2016 Mobvoi Inc. All Rights Reserved. 北京羽扇智信息科技有限责任公司  京ICP备14058077号-1</span>
                <a href="http://www.chumenwenwen.com/site/service.html" target="_blank" class="service-term">服务条款</a>
                <a href="http://en.ticwear.com" class="english-link" target="_blank">
                    <i></i>
                    English
                </a>
            </p>
            <p class="wenwen">出门问问旗下产品官网</p>
        </div>
        <div class="footer-bottom-mobile">
            <h2 class="mobile-phone">400 883 8390</h2>
            <p class="mobile-time">周一至周日 9:00-21:00（仅收市话费）</p>
            <p class="phone-time-btn" onclick="jiaxinTogglerDiv()">
                <em>在线客服</em>
            </p>
            <p class="mobile-company">Copyright © 2016 Mobvoi Inc. All Rights Reserved.
                <br>北京羽扇智信息科技有限责任公司
            </p>
            <a href="http://en.ticwear.com" class="english-link">
                <i></i>English
            </a>
        </div>

        <!--<script src="<?/*= Url::to('@web/js/jquery.min.js', false);*/?>"></script>-->
        <script src="<?= Url::to('@web/js/common.js', false);?>"></script>

    <?php $this->endBody() ?>
        </body>
        </html>
    <?php $this->endPage() ?>


