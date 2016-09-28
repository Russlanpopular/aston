<?php

use yii\bootstrap\Html;
use app\assets\AppAsset;
use yii\helpers\Url;


AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
            html {
              position: relative;
              min-height: 100%;
            }
            body {
              /* Margin bottom by footer height */
              margin-bottom: 60px;
            }
            .footer {
              position: absolute;
              bottom: 0;
              width: 100%;
              /* Set the fixed height of the footer here */
              height: 60px;
              background-color: #f5f5f5;
            }


            /* Custom page CSS
            -------------------------------------------------- */
            /* Not required for template or sticky footer method. */

            body > .container {
              padding: 60px 15px 0;
            }
            .container .text-muted {
              margin: 20px 0;
            }

            .footer > .container {
              padding-right: 15px;
              padding-left: 15px;
            }

            code {
              font-size: 80%;
            }
      </style>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Aston</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php if(Url::to('')=='/admin/panel'){echo "active";}?>"><a href="/admin/panel">Главная</a></li>
      <li class="<?php if(Url::to('')=='/admin/results'){echo "active";}?>"><a href="/admin/results">Результат деятельности</a></li>
      <li class="<?php if(Url::to('')=='/admin/service'){echo "active";}?>"><a href="/admin/service">Услуги</a></li>
      <li class="<?php if(Url::to('')=='/admin/partners'){echo "active";}?>"><a href="/admin/partners">Партнеры</a></li>
      <li class="<?php if(Url::to('')=='/admin/contacts'){echo "active";}?>"><a href="/admin/contacts">Контакты</a></li>
    </ul>
  </div>
</nav>

<?= $content ?>

    <footer class="footer">
      <div class="container">
        <p class="text-muted text-center">Aston 2016</p>
      </div>
    </footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
