<?php
    /** Sugestão de tipos
     * Serve para passar como parâmetro, de um método, um tipo
     * pré-estabelecido, garantindo assim mais segurança ao 
     * código
     */

    // exemplo da formação, que neste caso está sugerindo o tipo array
    function nomeFuncao (array $nomeArgumento){
        //codigo vai aqui
    }

    // Funcao pode obter apenas uma array como argumento
    function calcNumKmComTanqueCheio (array $modelos) {
        foreach($modelos as $item){
            echo $modeloCarro = $item[0];
            echo " : ";
            echo $numeroKm = $item[1] * $item[2];
            echo "<br />";
        }
    }

    // passando os valores como forma de array
    $modelos = array(
            array("Toyota", 40, 15),
            array("BMW", 45, 12)
        );

    calcNumKmComTanqueCheio($modelos);

    /** Sugestão de tipos para objetos, em POO */
    class Carro {
        protected $motorista;

        // Contrutor só pode obter objetos como argumentos
        public function __construct(Motorista $motorista){
            $this->motorista = $motorista;
        }
    }

    /** Aí quando for criada uma classe que extenda a classe
     * principal, apenas poderá ser usada, no construct, um 
     * objeto derivado da classe Motorista
     */
    //class Motorista {…};
    $motorista1 = new Motorista();
    $carro1 = new Carro($motorista1);
?>