<?php if(!empty($session['cart'])) { ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <tr>
                <th>фото</th>
                <th>наименование</th>
                <th>Кол-во</th>
                <th>цена</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
                <?php foreach ($session['cart'] as $id => $item) { ?>
                <tr>
                    <td><?=\yii\helpers\Html::img("@web/images/product/{$item['img']}", ["alt" => $item['name'], 'height' => 50] )?></td>
                    <td><?=$item['name']?></td>
                    <td><?=$item['qty']?></td>
                    <td><?=$item['price']?></td>
                    <td><span class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true" data-id="<?=$id?>"></span></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="4">Итого</td>
                    <td><?=$session['cart.qty']?></td>
                </tr>
                <tr>
                    <td colspan="4">На сумму</td>
                    <td><?=$session['cart.sum']?></td>
                </tr>
        </table>
    </div>
<?php } else { ?>
    <h1>Карзина пуста</h1>
<?php } ?>