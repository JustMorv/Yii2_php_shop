<?php
use app\components\menuWiget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */

?>

<section id="advertisement">
    <div class="container">
        <img src="images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <ul class="catalog category-products">
                        <?= menuWiget::widget(['tpl' => 'menu']) ?>
                    </ul>


                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="images/product/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"> Поиск по запросу 
                        <?= $q ?>
                    </h2>
                    <?php if (!empty($product)) { ?>
                        <?php $i = 0;
                        foreach ($product as $prod) { ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <?= Html::img("@web/images/product/{$prod->img}", ["alt" => $prod->name]) ?>
                                            <h2>$
                                                <?= $prod->price ?>
                                            </h2>
                                            <p><a href="<?= Url::to(['product/view', 'id' =>$prod->id])?>" data-id="<?=$prod->id?>>"><?=$prod->name?></a></p>

                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <?php if ($prod->new) { ?>
                                            <?= Html::img("@web/images/home/new.png", ["alt" => "new!", "class" => "new"]) ?>
                                        <?php } ?>
                                        <?php if ($prod->sale) { ?>
                                            <?= Html::img("@web/images/home/sale.png", ["alt" => "new!", "class" => "sale"]) ?>
                                        <?php } ?>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php $i++;
                            if ($i % 3 == 0) { ?>
                                <div class="clearfix"></div>
                            <?php } ?>
                        <?php } ?>
                        <?= LinkPager::widget([
                            'pagination' => $pages,
                        ]) ?>
                    <?php } else { ?>
                        <h2> Ничего не найдено</h2>
                    <?php } ?>
                    <div class="clearfix"></div>


                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>