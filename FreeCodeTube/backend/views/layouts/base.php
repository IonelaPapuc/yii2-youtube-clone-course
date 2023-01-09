
<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        rel="stylesheet">
        <?php $this->head() ?>
    </head>
    <body >
    <?php $this->beginBody() ?>
    <div class="warp h-100 d-flex flex-column">
        <div class="warp h-100 d-flex flex-column">

            <?php echo $this->render('_header') ?>

    <?php echo $content?>
    </div>
    </div>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
