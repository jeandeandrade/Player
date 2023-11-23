<?php

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
        public function __construct($nickname, $nivel, $inventario)
        {
            $this->setNickname($nickname);
            $this->setNivel($nivel);
            $this->setInventario($inventario);
        }

        public function getNickname()
        {
            return $this->nickname;
        }

        public function getNivel()
        {
            return $this->nivel;
        }

        public function getInventario()
        {
            return $this->inventario;
        }

        public function setNickname($nickname)
        {
            $this->nickname = $nickname;
        }

        public function setNivel($nivel)
        {
            $this->nivel = $nivel;
        }

        public function setInventario($inventario)
        {
            $this->inventario = $inventario;
        }
    }

?>