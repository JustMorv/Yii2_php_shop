<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Category $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?php //= $form->field($model, 'parent_id')->textInput(['maxlength' => true]) ?>
<?php //=  $form->field($model, 'parent_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name'))?>

    <div class="form-group field-category-parent_id required">
        <label class="control-label" for="category-parent_id">Родитель</label>
        <select id="category-parent_id" class="form-control" name="Category[parent_id]" aria-required="true">
            <option value="0"> Главная категория</option>
           <?= \app\components\menuWiget::widget(['tpl'=>'select', 'model'=>$model])?>

        </select>

        <div class="help-block"></div>
    </div>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
