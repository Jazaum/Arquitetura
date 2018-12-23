<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Bem vindo! </h1>

        <p class="lead">Está afim de um livro? Comece pesquisando clicando no botão abaixo</p>

         <?= Html::a('Buscar Livros', ['/livros/index'], ['class' => 'btn btn-success']) ?>
        
           
         
</div>
   

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                              <h2>Harry Potter e o Cálice de Fogo</h2>

                <p>Harry Potter e o Cálice de Fogo é o quarto livro dos sete volumes da série de
				fantasia Harry Potter, tanto em termos cronológicos como 
				em ordem de publicação, da autora inglesa J. K. Rowling. 
				Foi primeiramente publicado no Reino Unido e nos Estados 
				Unidos em 2000. O livro segue o quarto ano de Harry Potter 
				na Escola de Magia e Bruxaria de Hogwarts.</p>
					<img src="img/1.jpg">


               
            </div>
            <div class="col-lg-4">
                <h2>O Retorno do Rei</h2>

                <p>O Retorno do Rei é a terceira parte da grande obra de ficção fantástica de J. R. R. Tolkien, O Senhor dos Anéis. 
				É impossível transmitir ao novo leitor todas as qualidades e o alcance do livro. Alterdamente cômica,
				singela, épica, monstruosa e diabólica, a narrativa desenvolve-se em meio a inúmeras mudanças de cenários 
				e de personagens, num mundo imaginário absolutamente em seus detalhes. Tolkien criou em O Senhor dos Anéis uma nova mitologia, 
				num mundo inventado que demonstrou possuir um poder de atração atemporal.</p>
				<img src="img/2.jpg">
                
            </div>
            <div class="col-lg-4">
                <h2>O Ladrão de Raios </h2>

                <p>Os cinco livros da série que se tornou fenômeno mundial, em edição limitada e com design exclusivo:
				as cinco lombadas dos livros compõem, juntas, uma ilustração especial de John Rocco. 
				Em O ladrão de raios, Percy Jackson, o menino que aos doze anos descobre que é um semideus, 
				filho de Poseidon, precisa impedir uma guerra entre os deuses que destruiria a civilização
				ocidental; em O Mar de Monstros, ele e os amigos se envolvem em uma perigosa aventura para defender o </p>
				<img src="img/3.jpg">
            </div>
        </div>

    </div>
</div>
