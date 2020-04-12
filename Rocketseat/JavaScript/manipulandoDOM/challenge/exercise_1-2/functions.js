// função obrigatória para o botão popover
$(function () {

    $('[data-toggle="popover"]').popover()

})



/**
 * função que define a classe de um 
 * elemento qualquer da DOM 
 */
function setClass(element, elementClass) {

    return element.setAttribute('class', elementClass);

}


/**
 * função que define o ID de um 
 * elemento
 */
function setID(element, elementID) {

    return element.setAttribute('id', elementID);

}


/**
 * função que gera uma cor aleatória
 */
function getRandomColor() {

    let letters = '0123456789ABCDEF';
    let color = "#";


    for (let counter = 0; counter <= 5; counter++) {

        color += letters[Math.floor(Math.random() * 16)];

    }


    return color;

}


/**
 * este é o contador do número que ficará 
 * em cada quadrado colocado na tela
 */
var counter = 0;

function squareCreator() {

    // cria a "div" do "quadrado" da tela
    let square = document.createElement('div');
    /**
     * define a classe e a ID do quadrado
     */
    setClass(square, 'square');
    setID(square, 'square');
    
    /**
     * define que o quadrado criado 
     * faz parte do "div" principal
     */
    let squareBox = document.getElementById('square-box');
    squareBox.appendChild(square);

    /**
     * cria o p que conterá dentro de 
     * si o contador anteriormente 
     * declarado
     */
    let textBox = document.createElement('p');
    square.appendChild(textBox)

    /**
     * "looping" que aumenta o valor do 
     * contador
     */
    let squareCounter = document.createTextNode(counter++);
    textBox.appendChild(squareCounter);

    return square;

}


function squareRemover() {

    /**
     * pega a "div" em que o quadrado 
     * da função anterior está contido
     */
    let square = document.getElementById('square');
    
    /**
     * e remove-o
     */
    let squareBox = document.getElementById('square-box');
    squareBox.removeChild(square);

}


/**
 * pega o elemento "square" que é criado 
 * cada vez que clica-se o botão de add
 */
function getSquare() {

    return document.getElementById('square');

}