/**
 * com o yarn dev (dev é o script configurado 
 * no package.json) ele vai fazer a "tradução" 
 * para o "bundle.js", comforme o script 
 * declarado no arquivo JSON. Mas se for colocado 
 * um "-w" junto ao comando, irá acontecer a mesma 
 * coisa que o --watch do SASS, em que o processo 
 * ficará em aberto, fazendo a tradução instantânea 
 * do script, conforme sua escrita
 */


class List {

    constructor() {

        this.data = [];

    }


    add(data) {

        this.data.push(data);
        console.log(this.data);
        
    }

}


/**
 * e há também a herança de classes, que nem no PHP
 */

class ToDoList extends List {

    /**
     * aqui as funções não são que nem no PHP, 
     * em que é necessário todo o escopo do 
     * método (i.e. public function). simplesmente 
     * coloca-se o nome do método em si e pronto, 
     * pode-se usufruir de tudo isso
     */


    constructor() {

        /**
         * "super()" é a mesma coisa que, no PHP, 
         * o "parent::__construct()"
         */

        super();

        this.usuario = 'Cristian';

    }


    mostraUsuario() {

        console.log(this.usuario);

    }


    /**
     * e aqui há também métodos estáticos, conforme 
     * o PHP, porém há um detalhe
     */

    /**
     * essa função simplesmente não irá funcionar, 
     * pois um método estático não interage com 
     * os outros itens dentro de uma classe. Ele 
     * não vai "enxergar" as propriedades e métodos 
     * que existem dentro dessa classe. Única coisa a 
     * ser reconhecida é o próprio conteúdo criado dentro 
     * deste método estático. Por isso seu uso geralmente se 
     * dá em uma classe solitária em que apenas exista este 
     * ou outros métodos estáticos
     */

    /**
     * métodos estáticos geralmente são usados para uma simples 
     * operação que ganhe valores e em seguida retorne um resultado. 
     * Como por exemplo em uma operação de matemática 
     * (exemplo a seguir)
     */

    // static mostraToDo() {

    //     this.data.push('Show');
    //     console.log(this.data);

    // }

}


class Matematica {

    static soma(x, y) {

        return x + y;

    }

}


const MinhaLista = new ToDoList();

document.getElementById('todoSubmit').onclick = function() {

    MinhaLista.add('Novo To Do!');

}

MinhaLista.mostraUsuario();


/**
 * e para referenciar este método estático, 
 * não precisa usar nada de "new", ou então 
 * criar variável etc. Basta simplesmente 
 * chamar a função referenciando a classe 
 * e pronto (exemplo a seguir)
 */

console.log(Matematica.soma(1, 2)); // resultado -> 3
