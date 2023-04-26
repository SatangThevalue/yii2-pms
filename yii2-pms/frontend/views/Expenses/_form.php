<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Expenses $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="expenses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'expenses_type')->textInput() ?>

    <?= $form->field($model, 'expenses_category_date')->textInput() ?>

    <?= $form->field($model, 'expenses_category_Fk')->textInput() ?>

    <?= $form->field($model, 'expenses_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
