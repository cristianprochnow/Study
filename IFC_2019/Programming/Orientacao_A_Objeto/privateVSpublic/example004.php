<?php
    class Carro
    {
        //modificador private nega acesso
        //à propriedade fora do escopo da classe
        private $modelo;

        //modificador public permite acesso
        //ao método fora da classe
        public function setModelo($modelo)
        {
            //validar certos modelos de carro
            //que são atribuidos à propriedade $modelo
            $modelosPermitidos = array("Mercedes Benz", "BMW");

            if (in_array($modelo,$modelosPermitidos))
            {
                $this->modelo = $modelo;
            }
            else
            {
                $this->modelo = "Não pertence a lista de modelos.";
            }
        }

        public function getModelo()
        {
            return "O modelo do carro é " . $this->modelo;
        }
    }

    $mercedes = new Carro();

    //Define o modelo do carro
    $mercedes -> setModelo("Mercedes Benz");

    //Obtem o modelo do carro
    echo $mercedes->getModelo();

    $mercedes = new Carro();

    //Define o modelo do carro
    $mercedes->setModelo("Audi");

    //Obtem o modelo do carro
    echo $mercedes->getModelo();
?>