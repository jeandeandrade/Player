<?php

require_once('Inventario.php');

    /**
     * @method string getNickname()
     * @method int getNivel()
     * @method Inventario getInventario()
     * @method void setNickname(string $nickname)
     * @method void setNivel(int $nivel)
     * @method void setInventario(Inventario $inventario)
     * @method void coletarItem(Item $item)
     * @method void soltarItem(Item $item)
     * @method void subirNivel()
    */
    
    class Player
    {
        /**
         * @var string $nickname
         */
        private $nickname;

        /**
         * @var int $nivel
         */
        private $nivel;

        /**
         * @var Inventario
         */
        private $inventario;

        /**
         * Construtor da Classe Player
         * 
         * @param string $nickname
         * @param int $nivel
         * @param Inventario $inventario
         */
        public function __construct(string $nickname, int $nivel, Inventario $inventario)
        {
            $this->setNickname($nickname);
            $this->setNivel($nivel);
            $this->setInventario($inventario);
        }

        /**
         * Obtem o nickname do jogador
         * 
         * @return string
         */
        public function getNickname()
        {
            return $this->nickname;
        }

        /**
         * Obtem o nivel do jogador
         * 
         * @return int
         */
        public function getNivel()
        {
            return $this->nivel;
        }

        /**
         * Obtem o inventario do jogador
         * 
         * @return Inventario
         */
        public function getInventario()
        {
            return $this->inventario;
        }

        /**
         * Define o nickname do jogador
         * 
         * @param string $nickname
         */
        public function setNickname(string $nickname)
        {
            $this->nickname = $nickname;
        }

        /**
         * Define o nivel do jogador
         * 
         * @param int $nivel
         */
        public function setNivel(int $nivel)
        {
            $this->nivel = $nivel;
        }

        /**
         * Define o inventário do jogador
         * 
         * @param Inventario $inventario
         */
        public function setInventario(Inventario $inventario)
        {
            $this->inventario = $inventario;
        }

        /**
         * Coleta um item para o inventário
         * 
         * @param Item $item
         */
        public function coletarItem(Item $item)
        {
            // Verifica se há espaço no inventário
            if ($this->inventario->adicionarItem($item)) {
                return "<br>Item {$item->getName()} coletado<br>";
            } else {
                return "<br>Inventário cheio. <br> Não foi possível coletar o item {$item->getName()}<br>";
            }
        }

        /**
         * Solta um item do inventário do jogador
         * 
         * @param Item $item
         */
        public function soltarItem(Item $item)
        {
            $this->inventario->removerItem($item);
            echo "Item removido";
        }

        /**
        * Faz o jogador subir de nível e aumenta a capacidade do inventário.
        */
        public function subirNivel()
        {
            $this->nivel++;
            $this->aumentarCapacidadeDoInventario();
            echo "Você subiu de nivel {$this->nivel}<br><br>";
        }

        /**
        * Aumenta a capacidade do inventário do jogador conforme seu nível.
        */
        public function aumentarCapacidadeDoInventario()
        {
            $aumento = $this->nivel * 3;
            $this->inventario->setCapacidadeMaxima($aumento);
        }
    }

?>