<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "p_product".
 *
 * @property string $id
 * @property string $name
 * @property string $description
 * @property integer $price
 * @property string $image_path
 * @property string $code
 * @property integer $quantity
 * @property string $tags
 * @property string $summary
 *
 * @property PProductCategory $id0
 * @property PProductCategory[] $pProductCategories
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'p_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['price', 'quantity'], 'integer'],
            [['name', 'image_path', 'code'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 2000],
            [['tags'], 'string', 'max' => 500],
            [['summary'], 'string', 'max' => 1000],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductCategory::className(), 'targetAttribute' => ['id' => 'product_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'name' => Yii::t('common', 'Name'),
            'description' => Yii::t('common', 'Description'),
            'price' => Yii::t('common', 'Price'),
            'image_path' => Yii::t('common', 'Image Path'),
            'code' => Yii::t('common', 'Code'),
            'quantity' => Yii::t('common', 'Quantity'),
            'tags' => Yii::t('common', 'Tags'),
            'summary' => Yii::t('common', 'Summary'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(ProductCategory::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductCategories()
    {
        return $this->hasMany(ProductCategory::className(), ['product_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ProductQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductQuery(get_called_class());
    }
}
