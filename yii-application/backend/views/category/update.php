<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('common', 'Update {modelClass}: ', [
    'modelClass' => 'Category',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="category-update info-box box box-default pad20">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
