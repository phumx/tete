<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AuthItemChild */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Auth Item Child',
]) . $model->parent;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Auth Item Children'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->parent, 'url' => ['view', 'parent' => $model->parent, 'child' => $model->child]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="auth-item-child-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $model->parent = $x[0]->parent;
            foreach($x as $item){
                $arrChild[]=$item['child'];
            };
            $model->child =$arrChild;

    ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
