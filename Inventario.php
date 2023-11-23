<?php

    require_once('Item.php');

    /**
    * @method int getCapacidadeMaxima() 
    * @method void setCapacidadeMaxima(int $capacidadeMaxima) 
    * @method array getItens() 
    * @method bool adicionarItem(Item $item) 
    * @method bool removerItem(Item $item) 
    * @method int capacidadeLivre() 
    */

    class Inventario 
    {
        /**
        * @var int 
        */
        private $capacidadeMaxima;

        /**
        * @var array 
        */
        private $itens;

        /**
        * Constructor da classe Inventário
        * 
        * @param int $capacidadeMaxima
        */
        public function __construct($capacidadeMaxima)
        {
            $this->capacidadeMaxima = $capacidadeMaxima;
            $this->itens = [];
        }

        /**
        * Obtém a capacidade máxima do inventário
        * 
        * @return int
        */
        public function getCapacidadeMaxima()
        {
            return $this->capacidadeMaxima;
        }

        /**
        * Define a capacidade máxima do inventário
        * 
        * @param int $capacidadeMaxima
        */
        public function setCapacidadeMaxima($capacidadeMaxima)
        {
            $this->capacidadeMaxima = $capacidadeMaxima;
        }

        /**
        * Obtem os itens do inventario
        * 
        * @return array
        */
        public function getItens()
        {
            return $this->itens;
        }
    }
    

?>