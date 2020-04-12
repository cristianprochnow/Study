// função obrigatória para o botão popover
$(function () {

    $('[data-toggle="popover"]').popover()

})


/**
 * o símbolo de "ou" aqui serve para definir 
 * a decisão de que, caso a primeira requisição 
 * falhe, o valor a ser retornado será um array 
 * vazia
 */

/**
 * e aqui se usa o JSON, novamente, para converter 
 * o dado que antes havia sido transformado em string
 */

var ToDoS = JSON.parse(localStorage.getItem('ToDoList')) || [];

showToDo();

/**
 * função que modifica a classe de um elemento que foi 
 * criado usando o JavaScript
 * 
 * @param {elemento do HTML que vai ser modificado} element 
 * @param {nome da classe a ser colocada} className 
 */

function setClass(element, className) {

    return element.setAttribute('class', className);

}


/**
 * função que coloca um ID em algum elemento que foi 
 * criado inteiramente pelo JS... (Ou não)
 * 
 * @param {elemento do HTML que vai ser modificado} element 
 * @param {ID que vai ser definido} idName 
 */

function setID(element, idName) {

    return element.setAttribute('id', idName);

}


/**
 * função que cria os elementos da lista
 * (li, p, button, e seus textos)
 * 
 * @param {texto que vai estar em cada To Do} toDoText 
 */

function showToDo() {

    /**
     * referencia o "ul" que estará os itens
     */

    var listBox = document.querySelector('#listToDo');
    
    listBox.innerHTML = '';

    for (toDo of ToDoS) {

        
        /**
         * cria o "li" e já coloca os atributos como 
         * classe e ID
         */

        let liItemToDoList = document.createElement('li');

        setClass(liItemToDoList, 'list-group-item list-group-item-action');
        setID(liItemToDoList, 'list-item');

        
        /**
         * "p" e o texto que ficará dentro, já 
         * definindo o relacionamento (appendChild)
         */

        let textBox = document.createElement('p');
        
        setClass(textBox, 'mb-3');


        let text = document.createTextNode(toDo);

        textBox.appendChild(text);


        /**
         * pega o índice em que se está o 
         * To Do em destaque
         */

        let position = ToDoS.indexOf(toDo);


        /**
         * criando o botão e o texto de dentro dele
         */

        let deleteButton = document.createElement('button');

        setClass(deleteButton, 'btn btn-block btn-outline-danger');
        setID(deleteButton, 'deleteToDo');

        /**
         * chama a função de deletar toda vez que clicar 
         * neste botão
         */

        deleteButton.setAttribute('onclick', 'deleteToDo(' + position + ')');


        let deleteText = document.createTextNode('Excluir');

        deleteButton.appendChild(deleteText);


        /**
         * o restante dos relacionamentos, para formar 
         * assim o "li" completo
         */

        liItemToDoList.appendChild(textBox);
        liItemToDoList.appendChild(deleteButton);

        listBox.appendChild(liItemToDoList);

    }

}


/**
 * função que cria um ToDo, colocando o 
 * valor do input dentro da array de ToDos
 */

function createToDo() {

    let inputElement = document.querySelector('#inputToDo');

    
    if (inputElement.value !== '') {

        ToDoS.push(inputElement.value);

        inputElement.value = '';

    }


    showToDo();

    saveToLocalStorage();

}


/**
 * deleta um ToDo, na posição específica que se 
 * encontra o item na array
 * 
 * @param {posição da array que está o item} position 
 */

function deleteToDo(position) {

    ToDoS.splice(position, 1);

    showToDo();

    saveToLocalStorage();

}


/**
 * função que salva os dados em no local storage. 
 * O JSON com a função "stringify" serve para transformar 
 * toda a array em uma simples string, já que o local storage 
 * só suporta um simples valor para ser guardado, como uma 
 * string. Vetores e objetos não são suportados
 */

function saveToLocalStorage() {

    localStorage.setItem('ToDoList', JSON.stringify(ToDoS));

}