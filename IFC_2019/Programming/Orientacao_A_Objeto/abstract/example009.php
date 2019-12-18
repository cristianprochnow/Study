<?php
    /** example #1
     * Exemplo de como é formada uma classe abstrata.
     * Com suas propriedades protegidas e seus métodos
     * definidos como abstratos, não possuindo assim nenhum código
     */
    abstract class Carro {
        // Classes abstratas podem ter propriedades
        protected $volumeTanque;
        
        // Classes abstratas podem ter métodos não abstratos
        public function setVolumeTanque($volume)
        {
            $this -> volumeTanque = $volume;
        }

        // Metodo abstrato
        abstract public function calcNumKmComTanqueCheio();
    }

    /** example #2
     * Demonstração de como os dados são herdados,
     * e assim, os métodos são, enfim, declarados
     * (na parte do código)
     */
    class Toyota extends Carro {
        // Herdamos um metodo abstrato da classe mae
        // Temos que defini-lo na classe filha
        // Adicionando codigo no corpo do metodo
        public function calcNumKmComTanqueCheio()
        {
            $km = $this -> volumeTanque * 15;
            return $km;
        }

        public function getCor()
        {
            return “azul”;
        }
    }

    /** os objetos tem que ser direcionados para as classes filhas,
     * e não para as abstratas
     */
    $toyota1 = new Toyota();
    $toyota1 -> setVolumeTanque(30);
    echo $toyota1 -> calcNumKmComTanqueCheio(); // vai retornar 450, pois 30*15 = 450
    echo $toyota1 -> getCor(); // azul

    /**
     * De modo geral, se usa esse esquema de abstração
     * quando o desejo é realizar um método que seja comum à várias classes,
     * pois assim a preocupação com o funcionamento da classe principal (mãe)
     * é menor. Dá mais praticidade ao código.
     * 
     * A classe mãe (abstrata) fala que algo tem que ser feito [abstract public funcion função();]
     * As classes filhas (concretas) realizam este método e
     * os pôe em prática [public function função(){}]
     */
?>