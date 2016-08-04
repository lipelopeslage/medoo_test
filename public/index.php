<?php
	require_once('./model/PrimeiraDAO.php');
	require_once('./model/PrimeiraMagicDAO.php');

	$primeiraModel = new PrimeiraDAO('primeira');
	

	/**************
		INSERT
	**************/
	/*$primeiraModel->insert(
		['name'=>'Daniela', 
		'age'=>30]
	);*/

	/**************
		DELETE
	**************/
	/*$primeiraModel->delete(
		['name'=>'Daniela']
	);*/

	/**************
		UPDATE
	**************/
	$primeiraModel->update(
		['age[>]'=>30], 
		['age'=>40]
	);

	/**************
		RETRIEVE
	**************/
	$registros = $primeiraModel->select('*');

	var_dump($registros);

	echo '<br><br>';

	$primeiraMagicModel = new PrimeiraMagicDAO('primeira');
	//$primeiraMagicModel->insert(['name'=>'Teste', 'age'=>100]);
	$registros = $primeiraMagicModel->select('*');
	var_dump($registros);
/*
	refs:
	http://medoo.in/doc
*/
?>