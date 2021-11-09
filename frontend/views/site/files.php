<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Files';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="files">
        <div class="file cols">
            <div>Title</div>
            <div>ThumbnailLink</div>
            <div>EmbedLink</div>
            <div>ModifiedDate</div>
            <div>FileSize</div>
            <div>OwnerNames</div>
        </div>
        <?php foreach ($models as $model): ?>
            <div class="file">
                <div><?= $model->title ?></div>
                <div><img width="80" height="80"
                          src="<?= $model->thumbnailLink ?: 'https://via.placeholder.com/80' ?>"/></div>
                <div><a href="<?= $model->embedLink ?>" target="_blank">Embed Link</a></div>
                <div><?= date("Y/m/d", strtotime($model->modifiedDate)) ?></div>
                <div><?= $model->fileSizeMB ?></div>
                <div><?= implode(" ", $model->ownerNames) ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
