<?php

    class Produto {

        private $codigoProduto;
        private $nomeProduto;
        private $custoProduto;
        private $quantidadeEstoqueProduto;


        public function __construct($codigoProduto, string $nomeProduto) {

            $this -> codigoProduto = $codigoProduto;
            $this -> nomeProduto = $nomeProduto;

        }


        public function getName() {

            return $this -> nomeProduto;

        }


        public function getCodigoProduto() {

            return $this -> codigoProduto;

        }


        public function setQuantidadeEstoque(int $quantidadeEstoqueProduto) {

            $this -> quantidadeEstoqueProduto = $quantidadeEstoqueProduto;

        }


        public function getQuantidadeEstoque() {

            return $this -> quantidadeEstoqueProduto;

        }


        public function poeEstoque(int $quantidadeAdicionalEstoque) {

            $quantidadeTotalEstoque = $this -> getQuantidadeEstoque();
            $quantidadeTotalEstoque += $quantidadeAdicionalEstoque;
            $this -> quantidadeEstoqueProduto = $quantidadeTotalEstoque;

            return $this -> quantidadeEstoqueProduto;

        }


        public function semEstoque() {

            if ($this -> quantidadeEstoqueProduto == 0) {

                return true;

            } else {

                return false;

            }

        }


        public function setCustoProduto($custoProduto) {

            $this -> custoProduto = $custoProduto;

        }


        public function getCustoProduto() {

            return $this -> custoProduto;

        }

    }

?>