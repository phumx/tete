<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AuthItemChild */

$this->title = $model[0]->parent;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Auth Item Children'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-child-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'parent' => $model[0]->parent], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'parent' => $model[0]->parent], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php foreach($model as $m): ?>
    <?= DetailView::widget([
        'model' => $m,
        'attributes' => [
            'child',
        ],
    ]) ?>
    <?php endforeach; ?>
</div>
