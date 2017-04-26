<?php
namespace MyApplication\serviceLocator\model1;

/**
 * Simples implementação de um service locator
 * 
 * @see http://phpsp.org.br/service-locator-e-um-anti-pattern
 */
class ServiceLocator 
{
    /**
     * Armazena todos os serviços
     * 
     * @var array
     */
    private $services = array();
 
    /**
     * Seta para lista de serviços as instancias de objetos
     * 
     * @param string $name Nome da instancia
     * @param object $instance Instancia de um objeto
     * 
     * @return void
     */
    public function set($name, $instance)
    {
        $this->services[$name] = $instance;
    }
 
    /**
     * Retorna uma instancia de objeto através de seu alias
     * 
     * @param string $name
     * @return object Instancia do objeto requisitado
     */
    public function get($name)
    {
        return $this->services[$name];
    }
}