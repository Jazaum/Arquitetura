<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LivrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Livros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="livros-index">

    <h1><?= Html::encode($this->title) ?></h1>
 

    <p>
      
			
		
		<?php
                
                if (!Yii::$app->user->isGuest) {
                   echo Html::a('Cadastrar Livros', ['create'], ['class' => 'btn btn-success']);
                } else {
                    echo 'Realize o login para cadastrar livros';
                    
                }
                ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            'nome',
            'ano_livro',
            'autor',
            'genero',
            //'estado_fisic',
            //'ativo_inativo',
             
           //['class' => 'yii\grid\ActionColumn'],
            [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{usuario} ',
                        
                        'buttons' => [
                            'usuario' => function($url, $model){
                              $id=$model->usuario_id;
                                return Html::a('Doação', ['usuario/frete/','id' =>$id], ['class' => 'btn btn-success']);
                            },
                           ]
                        ]
                    ]
                 ]
            );
?>
</div>
