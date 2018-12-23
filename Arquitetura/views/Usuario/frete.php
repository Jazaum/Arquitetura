<?php
use app\models\Usuario;
use yii\base\Controller;
//echo $cep;
	$atributos = array();
	$atributos['nCdEmpresa'] = '';
	$atributos['sDsSenha'] = '';
	$atributos['sCepOrigem'] = $origem;
	$atributos['sCepDestino'] = $destino;
	$atributos['nVlPeso'] = '1';
	$atributos['nCdFormato'] = '1';
	$atributos['nVlComprimento'] = '16';
	$atributos['nVlAltura'] = '18';
	$atributos['nVlLargura'] = '14';
	$atributos['nVlDiametro'] = '0';
	$atributos['sCdMaoPropria'] = 's';
	$atributos['nVlValorDeclarado'] = '0';
	$atributos['sCdAvisoRecebimento'] = 'n';
	$atributos['StrRetorno'] = 'xml';
	$atributos['nCdServico'] = '04510';
	$atributos = http_build_query($atributos);
	$url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';
	$curl = curl_init($url.'?'.$atributos);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$dados = curl_exec($curl);
	$dados = simplexml_load_string($dados);
	
	foreach($dados->cServico as $linhas) {
		if($linhas->Erro == 0) {
			echo $linhas->Valor .'</br>';
			echo $linhas->PrazoEntrega.' Dias </br>';
		}else {
			echo $linhas->MsgErro;
		}
		echo '<hr>';
	}
?>