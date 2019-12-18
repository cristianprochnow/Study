<?php
    // $this example

    class Carro
    {
        // Propriedades
        public $comp;
        public $color = "preta";
        public $temTetoSolar = true;
        
        // O método agora pode ter acesso
        //às propriedades da classe
        // com a keyword $this
        public function hello()
        {
            return "Olá eu sou uma " . $this->comp . ", e minha cor é " . $this->color;
        }
    }

    // Criando dois objetos a partir da classe Carro
    $bmw = new Carro();
    $mercedes = new Carro();
    
    // Atribui valores às propriedades da classe
    $bmw->color = "azul";
    $bmw->comp = "BMW";
    $mercedes->comp = "Mercedes Benz";
    
    // Chama o método hello para o objeto $bmw.
    echo $bmw->hello();
?>