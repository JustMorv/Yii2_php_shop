<?php

namespace app\models;

use yii\db\ActiveRecord;

class OrderItmes extends ActiveRecord
{

    public static function tableName(){
        return 'order_items';
    }
    public function getOrder(){
        return $this->hasOne(Order::className(), ["id"=>'order_id']);
    }

    public function rules()
    {
        return [
            [['order_id', 'product_id', 'name', 'price','qty_item','sum_item'], 'required' ],
        ];
    }
}