// função obrigatória para o botão popover
$(function () {

    $('[data-toggle="popover"]').popover()

})



/**
 * @param {
 * é o parâmetro que recebe como 
 * argumento o elemento do HTML 
 * que deseja-se definir a classe
 * } element 
 * 
 * @param {
 * é  parâmetro que recebe e define 
 * o nome da classe que o elemento, 
 * anteriormente referido, irá ter
 * } className 
 */
function setClass(element, className) {

    return element.setAttribute('class', className);

}


function setID(element, IDname) {

    return element.setAttribute('id', IDname);

}


/**
 * pega a caixa principal do list group. 
 * Função específica para aquele atributo 
 * do código HTML
 */
function getBoxId() {

    let listBox = document.getElementById('listGroup');

    return listBox;

}


/**
 * pega o input em que está sendo digitado 
 * o usuário
 */
function getInput() {

    let input = document.getElementById('UserName');


    return input;

}


/**
 * função que fica responsável por criar 
 * o item li que conterá cada valor 
 * da array
 * 
 * @param {
 * é o parâmetro que fica responsável por 
 * receber o texto que ficará dentro do li, 
 * que nesse caso cada um dos valores 
 * da array
 * } text 
 */
function addListItem(text) {

    /**
     * cria o item da lista (li)
     */
    let listItem = document.createElement('li');

    /**
     * define a classe do bootstrap 
     * para ele
     */
    setClass(listItem, 'list-group-item list-group-item-action text-muted');
    /**
     * define o ID que será usado para 
     * funções que atuarão sob este item da 
     * lista, como por exemplo a de remover 
     * o usuário da lista
     */
    setID(listItem, 'userInfo');


    /**
     * define o texto que está dentro do li
     */
    let itemText = document.createTextNode(text);

    /**
     * transforma o texto em uma 
     * dependência do item da lista
     */
    listItem.appendChild(itemText);


    /**
     * define a caixa em que ficará o "li"
     */
    let listBox = getBoxId();

    /**
     * transforma o item anteriormente 
     * criado em uma dependência da box 
     * geral que vai abrigar todos os "li"'s
     */
    listBox.appendChild(listItem);


    return listItem;

}


function deleteListItem() {

    let listItem = document.getElementById('userInfo'),
        listBox = document.getElementById('listGroup'), 
        input = getInput();

    input.value = '';


    return listBox.removeChild(listItem);



    /**
     * no código abaixo, tentei fazer com que, 
     * se o usuário digitasse algum nome no 
     * input que fosse igual a algum 
     * nome já inserido na lista, ao clicar no 
     * botão de "excluir", especificamente esse 
     * item da lista (em que -> nome inserido 
     * === nome da lista) seria excluído, porém 
     * o código não está funcionando, e o que 
     * acho na internet até então, apenas envolve 
     * manipulação de dados SQL
     */
    //     input = getInput(), 
    //     inputValue = input.value, 
    //     listItemValue = listItem.textContent;


    // if (inputValue === listItemValue) {

    //     listBox.removeChild(listItem.textContent(listItemValue));

    // } else {

    //     listBox.removeChild(listItem);

    // }

}


/**
 * adiciona um novo usuário à lista, caso o 
 * valor do input será diferente de vazio ('')
 */
function addUser() {

    let input = getInput();

    
    if (input.value !== '') {

        let user = input.value;

        addListItem(user);

    }

    input.value = '';

}