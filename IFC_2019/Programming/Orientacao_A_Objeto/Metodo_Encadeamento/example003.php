<?php
    class Carro
    {
        public $tanque;

        // Acrescenta litros de combustível no tanque
        public function encher($qtde)
        {
            $this->tanque += $qtde;
            return $this;
        }
        
        // Subtrai litros de combustível do tanque ao andarmos com o carro
        public function andar($qtde)
        {
            $km = $qtde;
            $litros = $km/10;
            $this->tanque -= $litros;
            return $this;
        }
    }

    // Cria um novo objeto a partir classe Carro
    $bmw = new Carro();

    // Adiciona 10 litros de combustível, anda 40 km,
    // e obtém o número de litros restante no tanque
    $tanque = $bmw->encher(10)->andar(40)->tanque;

    // Imprime o resultado na tela
    echo "Sobraram no tanque: " . $tanque . " litros";
?>