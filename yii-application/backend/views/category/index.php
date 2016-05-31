<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('common', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index info-box box box-default pad20">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <p style="float: right">
        <?= Html::a(Yii::t('common', 'Create Category'), ['create'], ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent btn-3f51b5']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'tableOptions'=>['class' => 'mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp w100']
    ]); ?>
<?php Pjax::end(); ?></div>
