<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $content
 * @property int $price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property int|null $hit
 * @property int|null $new
 * @property int|null $sale
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'content', 'price', 'keywords', 'description', 'img'], 'required'],
            [['category_id', 'price', 'hit', 'new', 'sale'], 'integer'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['keywords', 'description', 'img'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'category_id' => 'категория',
            'name' => 'наименование',
            'content' => 'контент',
            'price' => 'цена',
            'keywords' => 'ключевые слова',
            'description' => 'описание',
            'img' => 'изображеие',
            'hit' => 'хит',
            'new' => 'новый',
            'sale' => 'скидка',
        ];
    }
}
