<?php
namespace MyApplication\model;

/**
 * Pessoa 
 *
 * @author Tayron
 */
class PessoaModel implements ModelInterface
{
    /**
     *
     * @var Model
     */
    private $model = null;
    
    /**
     *
     * @var string
     */
    private $nome;
    
    /**
     * 
     * @param type $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    /**
     * 
     * @param Model $model
     */
    public function __construct(Model $model) 
    {
        $this->model = $model;
    }
    
    /**
     * 
     * @throws Exception
     */
    public function salvar()
    {
        try{
            $this->model->salvar($this);
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }
}
