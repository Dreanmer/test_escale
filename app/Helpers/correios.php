<?php

function getAddressByCEP($cep){

	require_once(app_path() . '/Helpers/dom.php');
	require_once(app_path() . '/Helpers/curl.php');

	if(strlen($cep) < 8 || strlen($cep) > 9){
		return false;
	}

	$html = simple_curl('http://m.correios.com.br/movel/buscaCepConfirma.do', array('cepEntrada' => $cep, 'tipoCep' => '', 'cepTemp' => '', 'metodo' => 'buscarCep'));

	if($html = str_get_html($html)) {
		foreach ($html->find('.caixacampobranco span') as $element) {
			if (!isset($key) && $element->class == 'resposta') {
				$key = str_replace(array(' ', ':'), '', $element->plaintext);
			} elseif (isset($key)) {
				$dados[$key] = trim($element->plaintext);
				unset($key);
			}
		}
	}

	if(!isset($dados)){
		return false;
	}

	$localidade = explode('/', $dados['Localidade/UF']);
	$dados['Cidade'] = trim($localidade[0]);
	$dados['UF'] = trim($localidade[1]);
	unset($dados['Localidade/UF']);

	return $dados;

}
