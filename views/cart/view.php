<?php

use  yii\db\ActiveRecord;
use  yii\helpers\Html;
use  yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<div class="container">

    <? if (Yii::$app->session->hasFlash("success")) { ?>
        <div class="alert alert-success  alert-dismissible" role="alert">
            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>
                <?= Yii::$app->session->getFlash("success") ?>
            </strong>
        </div>
    <? } ?>

    <? if (Yii::$app->session->hasFlash("error")) { ?>
        <div class="alert alert-danger  alert-dismissible" role="alert">
            <button class="btn-close close" type="button" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>
                <?= Yii::$app->session->getFlash("error") ?>
            </strong>
        </div>
    <? } ?>
    <?php if (!empty($session['cart'])) { ?>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <tr>
                    <th>фото</th>
                    <th>наименование</th>
                    <th>Кол-во</th>
                    <th>цена</th>
                    <th>Сумма</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
                <?php foreach ($session['cart'] as $id => $item) { ?>
                    <tr>
                        <td><?= \yii\helpers\Html::img("@web/images/product/{$item['img']}", ["alt" => $item['name'], 'height' => 50]) ?></td>
                        <td><a href="<?= Url::to(['product/view', 'id'=>$id] )?>"><?= $item['name'] ?></a></td>
                        <td><?= $item['qty'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $item['qty'] * $item['price'] ?></td>
                        <td><span class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"
                                  data-id="<?= $id ?>"></span></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="5">Итого</td>
                    <td><?= $session['cart.qty'] ?></td>
                </tr>
                <tr>
                    <td colspan="5">На сумму</td>
                    <td><?= $session['cart.sum'] ?></td>
                </tr>
            </table>
        </div>
        <hr>
        <?php $form = ActiveForm::begin();?>
        <?= $form->field($order, 'name')?>
        <?= $form->field($order, 'email')?>
        <?= $form->field($order, 'phone')?>
        <?= $form->field($order, 'adress')?>
        <?= Html::submitButton('заказать', ['class'=>'btn btn-success'])?>
        <?php ActiveForm::end();?>
    <?php } else { ?>
        <h1>Карзина пуста</h1>
    <?php } ?>
</div>
