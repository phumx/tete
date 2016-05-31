<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('common', 'Create Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create info-box box box-default pad20">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
