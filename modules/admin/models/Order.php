<?php

namespace app\modules\admin\models;

use app\models\OrderItmes;
use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $created_at
 * @property string $update_at
 * @property int $qty
 * @property float $sum
 * @property int $status
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $adress
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'update_at', 'qty', 'sum', 'name', 'email', 'phone', 'adress'], 'required'],
            [['created_at', 'update_at'], 'safe'],
            [['qty', 'status'], 'integer'],
            [['sum'], 'number'],
            [['name', 'email', 'phone', 'adress'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'номер',
            'created_at' => 'Заказано',
            'update_at' => 'Обновлено',
            'qty' => 'Количество',
            'sum' => 'Сумма',
            'status' => 'Status',
            'name' => 'название',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'adress' => 'Адрес',
        ];
    }
    public  function getOrderItem(){
        return $this->hasMany(OrderItmes::className(), ['order_id'=>'id']);
    }
}
