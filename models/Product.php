<?php


namespace app\models;


class Product extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}