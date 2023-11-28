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
        private $itens = array();

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

        /**
        * Adiciona um item ao inventário.
        *
        * @param Item $item O item a ser adicionado ao inventário.
        * @return bool Retorna verdadeiro se o item foi adicionado com sucesso, caso contrário retorna falso.
        */
        public function adicionarItem(Item $item)
        {
            /**
             * Verifica se o item foi adicionado
             */
            foreach($this->itens as $verificaItem) {
                if($verificaItem === $item) {
                    echo "Item já está no inventário";
                    return false;
                }
            }

            // Adiciona o item no inventário
            if (count($this->itens) < $this->capacidadeMaxima) {
                $this->itens[] = $item;
                echo "Item coletado";
                return true;
            } else {
                echo "Inventário cheio";
                return false;
            }
        }


        /**
        * Remove um item do inventário.
        *
        * @param Item $item O item a ser removido do inventário.
        * @return bool Retorna verdadeiro se o item foi removido com sucesso, caso contrário retorna falso.
        */
        public function removerItem(Item $item)
        {
            $key = array_search($item, $this->itens);
            if ($key !== false) {
                unset($this->itens[$key]);
                $this->itens = array_values($this->itens);
                return true; 
            } else {
                return false;
            }
        }


        /**
        * Calcula a capacidade livre no inventário.
        *
        * @return int A capacidade livre no inventário.
        */
        public function capacidadeLivre()
        {
            $tamanhoTotal = 0;

            foreach($this->itens as $item) {
                $tamanhoTotal += $item->getTamanho();
            }
            return $this->capacidadeMaxima - $tamanhoTotal;
        }
    }
    

?>