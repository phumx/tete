<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auth_item_child".
 *
 * @property string $parent
 * @property string $child
 *
 * @property AuthItem $parent0
 * @property AuthItem $child0
 */
class AuthItemChild extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth_item_child';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'child'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parent' => Yii::t('app', 'Parent'),
            'child' => Yii::t('app', 'Child'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent0()
    {
        return $this->hasMany(AuthItem::className(), ['name' => 'parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChild0()
    {
        return $this->hasMany(AuthItem::className(), ['name' => 'child']);
    }


    public function save($runValidation = true, $attributeNames = null)
    {

        $parent = $this->parent;
        Yii::$app->db->createCommand()->delete('auth_item_child', ['parent'=>$parent])->execute();
        $childs = $this->child;
        if (is_array($childs)){
            foreach ($childs as $item) {
                Yii::$app->db->createCommand()->insert('auth_item_child', ['parent'=>$parent, 'child'=>$item])->execute();
            }
        }

    }

}
