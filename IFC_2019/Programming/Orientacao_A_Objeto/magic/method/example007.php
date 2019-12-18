<?php
    // example #1
    class Carro
    {
        private $modelo;
        
        // Metodo construtor
        public function __construct($modelo)
        {
            $this -> modelo = $modelo;
        }
    }


    // example #2
    class Carro2
    {
        private $modelo;

        // metodo construtor
        public function __construct($modelo)
        {
            $this -> modelo = $modelo;
        }

        public function getModeloCarro()
        {
            return "O modelo do carro é " . $this -> modelo;
        }
    }

    // Passa o valor da propriedade ao instanciar objeto
    $carro1 = new Carro("Mercedes");
    echo $carro1 -> getModeloCarro();


    // example #3.1
    class Carro3
    {
        // Propriedade tem um valor default = "N/A";
        private $modelo = "N/A";

        /**
         * Não precisa atibuir um valor a propriedade modelo
         * porque ela ja possui um valor default
         */
        public function __construct($modelo = null)
        {
            // Somente se o valor do modelo for passado, ele será atribuido
            if ($modelo)
            {
                $this -> modelo = $modelo;
            }
        }

        public function getModeloCarro()
        {
            return "O modelo do carro é: " . $this -> modelo;
        }
    }

        // Criamos um novo objeto sem passar um valor para $modelo
        $carro2 = new Carro3();
        echo $carro1 -> getModeloCarro();

    
    // example #3.2
    class Carro4
    {
        private $modelo = " ";

        public function __construct($modelo = null)
        {
            if ($modelo)
            {
                $this -> modelo = $modelo;
            }
        }

        public function getModeloCarro()
        {
            return "O modelo do carro é: " . $this -> modelo;
        }
    }

    // Criamos um novo objeto passando um valor para $modelo
    $carro3 = new Carro4();
    echo $carro3 -> getModeloCarro();
?>