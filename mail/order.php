<h1> я оправил сообщение</h1>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <tr>
            <th>наименование</th>
            <th>Кол-во</th>
            <th>цена</th>
            <th>сумма</th>
        </tr>

<!--        --><?php //foreach ($session['cart'] as $id => $item) { ?>
<!--            <tr>-->
<!--                <td>--><?php //= $item['name'] ?><!--</td>-->
<!--                <td>--><?php //= $item['qty'] ?><!--</td>-->
<!--                <td>--><?php //= $item['price'] ?><!--</td>-->
<!--                <td>--><?php //= $item['price'] * $item['qty'] ?><!--</td>-->
<!--            </tr>-->
<!--        --><?php //} ?>
        <tr>
            <td colspan="3">Итого</td>
<!--            <td>--><?php //= $session['cart.qty'] ?><!--</td>-->
        </tr>
        <tr>
            <td colspan="3">На сумму</td>
<!--            <td>--><?php //= $session['cart.sum'] ?><!--</td>-->
        </tr>
    </table>
</div>
