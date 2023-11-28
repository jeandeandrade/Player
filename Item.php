<?php

    class Item
    {
        /**
         * @var string Nome do item
         */
        protected $name;

        /**
         * @var int Tamanho do item
         */
        protected $tamanho;

        /**
         * @var string Classe do item
         */
        protected $classe;

        /**
         * Constructor da classe Item
         * 
         * @param string $name
         * @param int $tamanho
         * @param string $classe
         */
        public function __construct($name, $tamanho, $classe)
        {
            $this->name = $name;
            $this->tamanho = $tamanho;
            $this->classe = $classe;
        }

        /**
         * Obtém o nome do item.
         *
         * @return string O nome do item.
         */
        public function getName() {
            return $this->name;
        }

        /**
         * Define o nome do item.
         *
         * @param string $name O nome do item.
         */
        public function setName($name) {
            $this->name = $name;
        }

        /**
         * Obtém o tamanho do item.
         *
         * @return int O tamanho do item.
         */
        public function getTamanho() {
            return $this->tamanho;
        }

        /**
         * Define o tamanho do item.
         *
         * @param int $tamanho O tamanho do item.
         */
        public function setTamanho($tamanho) {
            $this->tamanho = $tamanho;
        }

        /**
         * Obtém a classe do item.
         *
         * @return string A classe do item.
         */
        public function getClasse() {
            return $this->classe;
        }

        /**
         * Define a classe do item.
         *
         * @param string $classe A classe do item.
         */
        public function setClasse($classe) {
            $this->classe = $classe;
        }
    }

?>