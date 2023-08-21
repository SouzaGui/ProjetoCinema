<?php 

    class Filme {
        public $titulo;
        public $genero;
        public $elenco;
        public $faixaEtaria;
        public $dataLancamento;

        public function __construct($titulo, $genero, $elenco, $faixaEtaria, $dataLancamento) {
            $this->titulo = $titulo;
            $this->genero = $genero;
            $this->elenco = $elenco;
            $this->faixaEtaria = $faixaEtaria;
            $this->dataLancamento = $dataLancamento;
        }
    }