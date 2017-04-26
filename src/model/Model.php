<?php
namespace MyApplication\model;

/**
 * Model 
 *
 * @author Tayron
 */
class Model
{
    /**
     * 
     * @param Model $entity
     * @return boolean
     * @throws Exception
     */
    public function salvar($entity)
    {
        if($entity){
            return true;
        }else{
            throw new Exception('Entidade não encontrada');
        }
    }
}
