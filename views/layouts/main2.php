<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">



    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class='<?php if(Url::to('')=='/partners'){echo "wrapper-partners";}else{echo "wrapper";} ?>'>
    <header class="header contacts-header clearfix">
        <a class="open-menu" href="#my-menu">Menu</a>
        <?php if (!Yii::$app->user->isGuest){echo '<div class="ifadmin"><a href="/admin/panel">Панель управления</a></div>';}?>
        <div class="left-side-header">
            <a href="/" class="logo-second"></a>
        </div>
        <div class="right-side-header">
            <ul class="contacts">
                <li>ООО «Астон Украина»</li>
                <li><i class="icon-services"></i>03150, г Киев, ул. Казимира Малевича,86П, оф. 407</li>
                <li><i class="icon-phone"></i>Тел. +38 (044) 338 32 00</li>
            </ul>
            <div class="top-menu">
                <nav>
                    <ul>
                        <li class="<?php if(Url::to('')=='/'){echo "active";}?>"><a href="/">О компании</a></li>
                        <li class="<?php if(Url::to('')=='/services'){echo "active";}?>"><a href="/services">Услуги</a></li>
                        <li class="<?php if(Url::to('')=='/partners'){echo "active";}?>"><a href="/partners">Партнеры</a></li>
                        <li class="<?php if(Url::to('')=='/contacts'){echo "active";}?>"><a href="/contacts">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <ul class="list-info mobile">
            <li>Уникальные знания и опыт</li>
            <li>Защита ваших интересов</li>
            <li>Ориентация в специфике отрасли</li>
        </ul>
    </header>

    <nav class="mobile-menu" id="my-menu">
        <ul>
            <li class="contacts">ООО «Астон Украина»</li>
            <li class="contacts"><i class="icon-services"></i>03150, г Киев, ул. Казимира Малевича,86П, оф. 407</li>
            <li class="contacts"><i class="icon-phone"></i>Тел. +38 (044) 338 32 00</li>

            <li><a href="/">О компании</a></li>
            <li><a href="/services">Услуги</a></li>
            <li><a href="/partners">Партнеры</a></li>
            <li><a href="/contacts">Контакты</a></li>
        </ul>
    </nav>





        <?= $content ?>

</div>
<footer>
    <div class="footer-wrapper">
        <a class="footer-logo" href="#"></a>

        <ul class="contacts-footer">
            <li>ООО «Астон Украина»</li>
            <li>03150, г Киев, ул. Казимира Малевича,86П, оф. 407</li>
            <li>Тел. +38 (044) 338 32 00</li>
        </ul>

        <nav>
            <ul>
            <li ><a href="/" class="<?php if(Url::to('')=='/'){echo "active";}?>">Главная</a></li>
            <li ><a href="/services" class="<?php if(Url::to('')=='/services'){echo "active";}?>">Услуги</a></li>
            <li ><a href="/partners" class="<?php if(Url::to('')=='/partners'){echo "active";}?>">Партнеры</a></li>
            <li ><a href="/contacts" class="<?php if(Url::to('')=='/contacts'){echo "active";}?>">Контакты</a></li>
            </ul>
        </nav>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
