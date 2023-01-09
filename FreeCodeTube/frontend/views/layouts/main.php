<?php
/* @var $this \yii\web\View */
/* @var $content string */
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
AppAsset::register($this);
$this->beginContent('@frontend/views/layouts/base.php');
?>
    <main role="main" class="d-flex" style="flex:1;">
        <?php echo $this->render('_sidebar') ?>
        <div class="content-wrapper p-3" style="flex:1;">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
<?php $this->endContent() ?>