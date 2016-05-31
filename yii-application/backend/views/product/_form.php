<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\widgets\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <!-- Add upload -->
    <?php  $this->registerJsFile('@web/js/my-dropzone.js', ['depends' => [\yii\web\JqueryAsset::className()]]); ?>
    <?php  $this->registerCssFile('@web/css/dropzone.css'); ?>

    <form action="/site/upload" class="dropzone" id="my-awesome-dropzone" method="post">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <div class="dz-message" data-dz-message><b>Chọn hoặc kéo ảnh sản phẩm vào đây</b></div>

    </form>
    <br/>
    <!-- end -- upload -->

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'description')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?php $form->field($model, 'image_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('common', 'Create') : Yii::t('common', 'Update'), ['class' => $model->isNewRecord ? 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent' : 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent btn-3f51b5']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
