<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\AuthItem;
/* @var $this yii\web\View */
/* @var $model common\models\AuthItemChild */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-item-child-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent')->dropDownList(
        ArrayHelper::map(AuthItem::find()->where(["=","type",1])->all(), 'name', 'name'),
        ['prompt'=>'Choose Role']    // options
    ); ?>

    <?= $form->field($model, 'child')->checkboxList(
        ArrayHelper::map(AuthItem::find()->where(["=","type",2])->all(), 'name', 'name'),
        ['prompt'=>'Choose Permission']    // options
    ); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
