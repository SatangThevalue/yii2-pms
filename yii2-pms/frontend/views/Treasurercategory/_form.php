<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Treasurercategory $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="treasurercategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'treasurer_category_title')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
