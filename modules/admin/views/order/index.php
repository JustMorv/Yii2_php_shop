<?php

use app\modules\admin\models\Order;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at',
            'update_at',
            'qty',
            'sum',
//            'status',
            [
                'attribute' => 'status',
                'value'=>function($data){
                    return !$data->status ?"<span class='text-danger'>Активен</span>":" <span class='text-success'>Завершён</span>";
                },
                "format"=>'raw',
            ],
            //'name',
            //'email:email',
            //'phone',
            //'adress',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }

            ],
        ],
    ]); ?>


</div>
