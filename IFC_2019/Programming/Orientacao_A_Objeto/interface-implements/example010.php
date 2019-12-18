<?php
    /** regras
     * interfaces podem ter apenas MÉTODOS ABSTRATOS e CONSTANTES, é PROIBIDO PROPRIEDADES E
     * TODOS OS MÉTODOS TEM QUE SER PÚBLICOS.
     * O resto de todo o processo, as classes implementadoras que ficam 
     * com todo o trabalho
     */

    /** quando usar?
     * se usar a interface quando deseja-se umm classe com total independência
     * de outros fatores. Pois pode ser passado apenas certas intruções
     * na classe principal/interface, e assim todos os 
     * outros processos são feitos pelas outras classes. Fazendo assim com que
     * uma classe implementadora qualquer não dependa em nada
     * do código de outra classe implementadora.
     */

    /**
     * exemplo de formação e montagem da interface
     * e implementação de classes
     */
    interface nomeInterface
    {
        // metodos abtratos
    }
        
    class Filha implements nomeInterface
    {
        // define metodos da interface
        // podem ter seu proprio codigo
    }

    /** example #1
     * exemplo que demonstra como pode ser usado o processo
     * de interface, mostrando como setter e getter pode
     * ser usado
     */
    interface Carro
    {
        public function setModelo($nome);
    
        public function getModelo();        
    }

    class MiniCarro implements Carro
    {
        private $modelo;
        
        public function setModelo($nome)
        {
            $this->modelo = $nome;
        }
        
        public function getModelo()
        {
            return $this->modelo;
        }
    }

    /** herança múltipla
     * exemplo que demonstra como uma classe filha
     * pode herdar todo o conteúdo de duas ou mais
     * classes mães.
     */

    interface Carro2
    {
        public function setModelo($nome);
    
        public function getModelo();
    }
        
    interface Veiculo
    {        
        public function setTemRodas($bool);
        
        public function getTemRodas();        
    }

    class MiniCarro2 implements Carro, Veiculo
    {
        private $modelo;
        private $temRodas;
        
        public function setModelo($nome)
        {
            $this->modelo = $nome;
        }

        public function getModelo()
        {
            return $this->modelo;
        }

        public function setTemRodas($bool)
        {
            $this->temRodas = $bool;
        }

        public function getTemRodas()
        {
            return ($this->temRodas) ? "tem rodas" : "sem rodas";
        }
    }
?>