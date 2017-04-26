<?php
require_once('bootstrap.php');

/**
 * Exemplo 1
 */
use MyApplication\serviceLocator\model2\ServiceLocator;
use MyApplication\model\Model;
use MyApplication\model\PessoaModel;
use MyApplication\controller\PessoaController;

$container = new ServiceLocator();
$container->add('model', new Model());
$container->add('pessoaModel', new PessoaModel($container->get('model')));
$container->add('pessoaController', new PessoaController($container->get('pessoaModel')));
$container->get('pessoaController')->salvar('Pedro');

/**
 * Exemplo 2
 */
//use MyApplication\serviceLocator\model1\ServiceLocator;
//use MyApplication\model\Model;
//use MyApplication\model\PessoaModel;
//use MyApplication\controller\PessoaController;
//
//$container = new ServiceLocator();
//$container->set('model', new Model());
//$container->set('pessoaModel', new PessoaModel($container->get('model')));
//$container->set('pessoaController', new PessoaController($container->get('pessoaModel')));
//
//echo $container->get('pessoaController')->salvar('Pedro');

/**
 * Exemplo 3
 */
//$container = DI\ContainerBuilder::buildDevContainer();
//$pessoaController = $container->get('MyApplication\controller\PessoaController');
//echo $pessoaController->salvar('Pedro');

/**
 * Exemplo 4 uso manual
 */
//use MyApplication\model\Model;
//use MyApplication\model\PessoaModel;
//use MyApplication\controller\PessoaController;
//
//$model = new Model();
//$pessoaModel = new PessoaModel($model);
//$pessoaController = new PessoaController($pessoaModel);
//$pessoaController->salvar('Pedro');
