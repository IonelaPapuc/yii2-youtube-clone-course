<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Html;




NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => ['class' => 'navbar-expand-lg navbar-light bg-light shadow-sm']

]);
$menuItems = [
   // ['label' => '', 'url' => ['/video/create']],


];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
    $menuItms[] = [
        'label' => 'Logout(' . Yii::$app->user->identity->username . ')',
        'url' => ['site/logout'],
        'linkOptions' =>
            [
                'data-method' => 'post'
            ]

    ];

}



?>

<form action="<?php echo \yii\helpers\Url::to(['/video/search']) ?>" class="form-inline my-2 my-lg-0">
    <label>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" name="keyword"
        value="<?php echo Yii::$app->request->get('keyword') ?>">
    </label>
    <button class="btn btn-success my-2 my-sm-0">Search</button>
</form>

<?php

        echo Nav::widget(['options' => ['class' => 'navbar-nav ml-auto '],
            'items' => $menuItems,]);

        if (Yii::$app->user->isGuest) {
            echo Html::tag('div', Html::a('', ['/site/login'], ['class' => ['btn btn-link login text-decoration-none']]), ['class' => ['d-flex']]);
        } else {
            echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
                }
            NavBar::end();
        ?>


