<?php
    /* Exemplo 1
    class Mae {
        //codigo da classe mãe
    }
        
    class Filha extends Mae {
        //esta classe pode usar o código da classe mãe
    }
    */




    /* Exemplo 2
    //Classe Mae
    class Carro
    {
        // Propriedade privada dentro da classe
        private $modelo;
    
        // metodo setter publico
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }
    
        public function hello()
        {
            return "beep! Eu sou um(a) " . $this->modelo . "<br />";
        }        
    }

    //Classe Filha herda o codigo da Classe Mãe
    class CarroEsporte extends Carro
    {
        //Nenhum codigo aqui
    }

    //Cria uma instancia da classe filha
    $carroEsporte1 = new CarroEsporte();

    // Define o valor da propriedade
    // Para este fim, usamos um método que criamos na classe mae
    $carroEsporte1->setModelo('Mercedes Benz');

    // Usando outro método que a classe filha herdou da classe mae
    echo $carroEsporte1->hello();
    */




    /* Exemplo 3
    // Classe Mae com seus metodos e propriedades Exemplo
    class Carro
    {
        // Propriedades e metodos privados só podem
        // ser usados pela classe mae
        private $modelo;
        
        // Propriedades e metodos publicos podem
        // ser usados pela classe mae e/ou filha
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }
        
        public function getModelo()
        {
            return $this->modelo;
        }
    }

    // Classe Filha pode usar o codigo herdado da classe mae
    // E tambem pode ter seu proprio codigo
    class CarroEsporte extends Carro
    {
    private $estilo = " fast and furious";
    
        public function dirigirComEstilo()
        {
            return "Dirija um(a) " . $this->getModelo() . $this->estilo;
        }
    }

    //Cria uma instancia da classe filha
    $carroEsporte1 = new CarroEsporte();

    // Usar metodo herdado da classe mae
    $carroEsporte1 -> setModelo('Ferrari');

    // Usar metodo que foi acrescentado na classe filha
    echo $carroEsporte1 -> dirigirComEstilo();
    */




    /* Exemplo 4
    // Classe Mae
    class Carro
    {
        // Propriedade private só pode
        // ser usada pela classe mae
        private $modelo;

        // metodo setter publico
        public function setModelo($modelo)
        {
            $this -> modelo = $modelo;
        }
    }

    // Classe Filha
    class CarroEsporte extends Carro
    {
        // Tenta obter uma propriedade private que pertence a classe mae
        public function hello()
        {
            return "beep! Eu sou um(a) " . $this->modelo . "<br />";
        }
    }

    //Cria uma instancia da classe filha
    $carroEsporte1 = new CarroEsporte();

    //Define o nome do modelo
    $carroEsporte1 -> setModelo('Mercedes Benz');

    //Obtem o nome do modelo
    echo carroEsporte1 -> hello();




    /* Exemplo 5
    // Classe Mae
    class Carro
    {
        // Propriedade protected pode
        // ser acessada pela classe mae e/ou filha
        protected $modelo;

        // metodo setter publico
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }
    }

    // Classe Filha
    class CarroEsporte extends Carro
    {
        // Pode-se obter uma propriedade protected que
        // pertence a classe mae
        public function hello()
        {
            return "beep! Eu sou um(a) " . $this->modelo . "<br />";
        }
    }

    //Cria uma instancia da classe filha
    $carroEsporte1 = new CarroEsporte();

    //Define o nome do modelo
    $carroEsporte1 -> setModelo('Mercedes Benz');

    //Obtem o nome do modelo
    echo carroEsporte1 -> hello();
    */

    /* Exemplo 6
    // Classe mae tem um metodo que retorna "beep"
    class Carro
    {
        public function hello()
        {
            return "beep";
        }
    }

    // Classe filha tem um metodo que retorna “Hello”
    class CarroEsporte extends Carro
    {
        public function hello()
        {
            return "Hello";
        }
    }

    //Cria um novo objeto
    $carroesporte1 = new CarroEsporte();

    //Imprime o resultado do metodo hello()
    echo $carroesporte1 -> hello();
    */




    /* Exemplo 7
    // Classe mae tem um metodo que retorna "beep"
    class Carro
    {
        final public function hello()
        {
            return "beep";
        }
    }

    // Classe filha tem um metodo que retorna “Hello”
    class CarroEsporte extends Carro
    {
        public function hello()
        {
            return "Hello";
        }
    }

    //Cria um novo objeto
    $carroesporte1 = new CarroEsporte ();

    //Imprime o resultado do metodo hello()
    echo $carroesporte1 -> hello();
?>