<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var backend\modules\campus\models\ApplyToPlay $model
*/
$copyParams = $model->attributes;

$this->title = Yii::t('common', 'Apply To Play');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Apply To Plays'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->apply_to_play_id, 'url' => ['view', 'apply_to_play_id' => $model->apply_to_play_id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'View');
?>
<div class="giiant-crud apply-to-play-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Yii::t('common', 'Apply To Play') ?>
        <small>
            <?= $model->apply_to_play_id ?>
        </small>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
            '<span class="glyphicon glyphicon-pencil"></span> ' . Yii::t('common', 'Edit'),
            [ 'update', 'apply_to_play_id' => $model->apply_to_play_id],
            ['class' => 'btn btn-info']) ?>

            <?= Html::a(
            '<span class="glyphicon glyphicon-copy"></span> ' . Yii::t('common', 'Copy'),
            ['create', 'apply_to_play_id' => $model->apply_to_play_id, 'ApplyToPlay'=>$copyParams],
            ['class' => 'btn btn-success']) ?>

            <?= Html::a(
            '<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('common', 'New'),
            ['create'],
            ['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
            . Yii::t('common', 'Full list'), ['index'], ['class'=>'btn btn-default']) ?>
        </div>

    </div>

    <hr />

    <?php $this->beginBlock('backend\modules\campus\models\ApplyToPlay'); ?>

    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'username',
        'phone_number',
        'email:email',
        'city',
        'province',
        'region',
        'status',
        'auditor_id',
    ],
    ]); ?>

    
    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . Yii::t('common', 'Delete'), ['delete', 'apply_to_play_id' => $model->apply_to_play_id],
    [
    'class' => 'btn btn-danger',
    'data-confirm' => '' . Yii::t('common', 'Are you sure to delete this item?') . '',
    'data-method' => 'post',
    ]); ?>
    <?php $this->endBlock(); ?>


    
    <?= Tabs::widget(
                 [
                     'id' => 'relation-tabs',
                     'encodeLabels' => false,
                     'items' => [
 [
    'label'   => '<b class=""># '.$model->apply_to_play_id.'</b>',
    'content' => $this->blocks['backend\modules\campus\models\ApplyToPlay'],
    'active'  => true,
],
 ]
                 ]
    );
    ?>
</div>
