<?php

// Verifica se as dependências do framworks foram baixadas via composer
if(!file_exists('./vendor/autoload.php')){
	exit('Favor excute composer install para baixar as dependências do OnFramework');
}

require_once('./vendor/autoload.php');