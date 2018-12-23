<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Livros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="livros-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ano_livro')->textInput() ?>

    <?= $form->field($model, 'autor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_fisic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ativo_inativo')->textInput() ?>

    <?= $form->field($model, 'genero')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
