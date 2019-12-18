<?php
    //Class defining
    class Carro
    {
        //propriety
        public $comp;
        public $cor = "preta";
        public $tetoSolar = true;

        // "hello" method
        public function hello()
        {
            return "Olá!";
        }
    }

    // create one instance
    $bmw = new Carro();
    $mercedes = new Carro();

    // take (get) and assign (set) the values
    echo $bmw -> cor = "azul"; // assigning
    echo "<br />";
    echo $mercedes -> cor; // taking
    echo "<hr />";

    // assigning more values
    $bmw -> cor = "azul escuro";
    $bmw -> comp = "BMW";
    $mercedes -> cor = "laranja";
    $mercedes -> comp = "Mercedes-Benz";

    // printing the values
    echo $bmw -> comp;
    echo "<br />";
    echo $bmw -> cor;
    echo "<hr />";
    echo $mercedes -> comp;
    echo "<br />";
    echo $mercedes -> cor;
    echo "<hr />";

    // printing "hello"
    echo $bmw -> hello();
    echo "<br />";
    echo $mercedes -> hello();
    echo "<hr />";

    /*
    <?php
        // Declara a classe
        class Carro {
            // propriedades
            public $comp;
            public $cor = “preta”;
            public $temTetoSolar = true;

            // método que diz olá
            public function hello(){
                return ”Olá!“;
            }
        }

        // Cria uma instância
        $bmw = new Carro();
        $mercedes = new Carro();

        // Obtem (Get) os valores
        echo $bmw->cor; // preta
        echo "<br />";
        echo $mercedes->cor; // preta
        echo "<hr />";

        // Atribui (Set) os valores
        $bmw->cor = ‘azul’;
        $bmw->comp = "BMW";
        $mercedes->comp = "Mercedes Benz";

        // Obtem os valores novamente
        echo $bmw->cor; // azul
        echo "<br />";
        echo $mercedes->cor; // preta
        echo "<br />";
        echo $bmw->comp; // BMW
        echo "<br />";
        echo $mercedes->comp; // Mercedes Benz
        echo "<hr />";

        // Usa os métodos para obter um “Olá”
        echo $bmw->hello(); // Olá
        echo "<br />";
        echo $mercedes->hello(); // Olá
    ?>
    */
?>