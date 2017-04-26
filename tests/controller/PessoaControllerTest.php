<?php
namespace MyApplicationTest\controller;

use MyApplication\controller\PessoaController;

/**
 * PessoaControllerTest
 * 
 * Classe de teste para testar o controller PessoaController
 * 
 * Para executar basta executar o comando no diretório raiz:
 * ./vendor/bin/phpunit
 *
 * @author Tayron Miranda <dev@tayron.com.br>
 */
class PessoaControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @var PessoaController
     */
    private $pessoaController;
    
    
    /**
     * PessoaControllerTest::__construct
     * 
     * Criando instancia do objeto pessoa controller para teste
     */
    public function __construct() 
    {
        // Crio um mock da minha classe PessoaModel.
        $pessoaModel = $this->getMockBuilder('MyApplication\model\PessoaModel')
            ->disableOriginalConstructor()
            ->getMock();

        $this->pessoaController = new PessoaController($pessoaModel);
    }
    
    
    /**
     * PessoaControllerTest::testSalvar
     * 
     * Testando método salvar
     * 
     * @return void
     */
    public function testSalvar()
    {
        try{
            $retorno = $this->pessoaController->salvar('Pedro');    
            $this->assertEquals($retorno, 'Dados salvo com sucesso');
        } catch ( Exception $ex){
            $this->assertFalse(false, $ex->getMessage());
        }
    }
}
