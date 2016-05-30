<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('common', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <p style="float: right">
        <?php  echo Html::a(Yii::t('common', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
      //  'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'description',
            'price',
            'image_path',
            // 'code',
            // 'quantity',
            // 'tags',
            // 'summary',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'tableOptions'=>['class' => 'table table-hover']
    ]); ?>
<?php Pjax::end(); ?></div>
