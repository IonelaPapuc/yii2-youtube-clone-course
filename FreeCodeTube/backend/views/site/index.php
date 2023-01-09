<?php

/** @var yii\web\View $this */
/** @var $latestVideo \common\models\Video */
/** @var $numberOfView integer */
/** @var $numberOfSubscribers integer */
/** @var $subscribers \common\models\Subscriber[] */

$this->title = 'My Yii Application';
?>
<div class="site-index d-flex">
    <div class="card m-2" style="width: 18rem;">
        <div class="embed-responsive embed-responsive-16by9 mb-3">
        <video class="embed-responsive-item"
               poster="<?php echo $latestVideo->getThumbnailLink() ?>"
               src="<?php echo $latestVideo->getVideoLink()?>"
              ></video>
        </div>

        <div class="card-body">
            <h5 class="card-title"><?php echo $latestVideo->title?></h5>
            <p class="card-text">
                Likes: <?php echo $latestVideo->getLikes()->count()?><br>
                Views: <?php echo $latestVideo->getViews()->count()?>
            </p>
            <a href="<?php echo \yii\helpers\Url::to(['/video/update', 'video_id'=>$latestVideo->video_id])?>" class="btn btn-primary">Edit</a>
        </div>
    </div>



    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Total Views</h5>
        <p class="card-text" style ="font-size: 48px">
            <?php echo $numberOfView?> </p>

    </div>
</div>

<div class="card m-2" style="width: 18rem;">
    <div class="card-body">

            <h5 class="card-title">Total Subscribers</h5>
            <p class="card-text" style ="font-size: 48px">
                <?php echo $numberOfSubscribers?> <br>

        </div>
    </div>

<!---->
<!--    <div class="card m-2" style="width: 18rem;">-->
<!--        <div class="card-body">-->
<!---->
<!--            <h5 class="card-title">Latest Subscribers</h5>-->
<!---->
<!--                --><?php //foreach ($subscribers as $subscriber): ?>
<!--            --><?php //echo $subscriber->user->username ?>
<!--              --><?php //endforeach; ?>
<!---->
<!--        </div>-->
<!--    </div>-->

</div>
