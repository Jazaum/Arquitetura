<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Livros */

$this->title = 'Create Livros';
$this->params['breadcrumbs'][] = ['label' => 'Livros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="livros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
