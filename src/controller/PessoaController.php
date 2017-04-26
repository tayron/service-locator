<?php
namespace MyApplication\controller;
use MyApplication\model\ModelInterface;

/**
 * Description of PessoaController
 *
 * @author Tayron
 */
class PessoaController 
{
    /**
     *
     * @var PessoaModel
     */
    private $entidadePessoa;
    
    /**
     * 
     * @param PessoaModel $entidadePessoa
     */
    public function __construct(ModelInterface $entidadePessoa) 
    {
        $this->entidadePessoa = $entidadePessoa;
    }
    
    /**
     * 
     */
    public function salvar($nomePessoa)
    {
        try{
            $this->entidadePessoa->setNome($nomePessoa);
            $this->entidadePessoa->salvar();   
            return 'Dados salvo com sucesso';
        } catch (Exception $ex) {
            return 'Não foi possível salvar os dados: <br />' . $ex->getMessage();
        }

    }
}
