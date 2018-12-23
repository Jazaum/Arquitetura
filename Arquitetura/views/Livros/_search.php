<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LivrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="livros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'usuario_id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'ano_livro') ?>

    <?= $form->field($model, 'autor') ?>

    <?php // echo $form->field($model, 'estado_fisic') ?>

    <?php // echo $form->field($model, 'ativo_inativo') ?>

    <?php // echo $form->field($model, 'genero') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
