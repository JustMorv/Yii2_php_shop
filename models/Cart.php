<?php
namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product, $qty = 1)
    {
        if (isset($_SESSION['cart'][$product->id])) {
            $_SESSION['cart'][$product->id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$product->id] = [
                'qty' => $qty,
                'name' => $product->name,
                'price' => $product->price,
                'img' => $product->img,
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price: $qty * $product->price;
    }

    public function recalc($id){

        if(!isset($_SESSION['cart'][$id])) {return false;}
        $qtyMunus = $_SESSION['cart'][$id]['qty'];
        $sumMunus = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];

        $_SESSION['cart.qty'] -= $qtyMunus;
        $_SESSION['cart.sum'] -= $sumMunus;

        unset($_SESSION['cart'][$id]);
    }
}