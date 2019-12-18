<?php
    /**
     * __LINE__ Número da linha corrente do arquivo.
     * 
     *__FILE__ Caminho completo e o nome do arquivo. Se for usada dentro de um include, 
     * o nome do arquivo incluído será retornado.
     * 
     *__DIR__ Caminho completo do diretório do arquivo. Equivalente a
     * dirname (__ file__). O nome do diretório não possui uma barra no final, a
     * menos que seja um diretório raiz.
     * 
     *__FUNCTION__ Nome da função em que é usada.
     *
     *__CLASS__ Nome da classe em que é usada.
     *
     *__METHOD__ Nome do método da classe em que é usada.
     */

    // Example #1
    class Carro
    {
        private $modelo = " ";
        
        public function __construct($modelo = null)
        {
            if($modelo)
            {
                $this->modelo = $modelo;  
            }
        }
        
        public function getModeloCarro()
        {
            return "O modelo do " . __CLASS__ . " é " . $this->modelo;
        }
    }
        
    $carro1 = new Carro(‘Mercedes’);
    echo $carro1->getModeloCarro();

    
    // Example #2
    class TestaConstantesMagicas
    {
        public function printClassName()
        {
            echo "Esta é a classe " . __CLASS__ . "<br />";
        }

        public function printMethodName()
        {
            echo "Este é o método " . __METHOD__ . "<br />";
        }

        public function printFunction()
        {
            echo "Esta é a função " . __FUNCTION__ . " dentro da classe.";
        }
    }

    // Instancia a classe
    $constantes_magicas = new TestaConstantesMagicas();

    // Imprime o nome da classe
    $constantes_magicas -> printClassName();

    // Imprime o nome do método
    $constantes_magicas -> printMethodName();

    // Imprime o nome da função dentro da classe
    $constantes_magicas -> printFunction();

    // This prints file full path and name
    echo "<br /> This file full path and file name is '" . __FILE__ . "'. <br />";

    // This prints file full path, without file name
    echo "This file full path is '" . __DIR__ . "’. <br />";

    // This prints current line number on file
    echo "This is line number " . __LINE__ . ". <br />";

    // Really simple basic test function
    function test_function_magic_constant()
    {
        echo "This is from '" . __FUNCTION__ . "' function. <br />";
    }

    test_function_magic_constant();
?>