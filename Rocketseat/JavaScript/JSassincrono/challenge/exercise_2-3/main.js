/**
 * pega o input que recebe 
 * o nome de usuário do GIT
 */

function getUserInput() {

    return document.querySelector('#userInput');

}


/**
 * seleciona o botão usado para 
 * dar submit no nome de usuário
 */

function getSearchButton() {

    return document.querySelector('#searchButton');

}


/**
 * retorna a lista principal em que 
 * os repositórios estarão referenciados
 */

function getListBox() {

    return document.querySelector('#listBox');

}


/**
 * função que pega o valor inserido 
 * no campo de input
 */

function getInputValue() {

    let input = getUserInput();


    if (input.value !== '') {

        return input.value;

    }

}


// function getGitRepositories() {

//     return new Promise(function(resolve, reject) {

//         xhr = new XMLHttpRequest();

//         xhr.open('GET', 'https://api.github.com/users/' + getInputValue() + '/repos');
//         xhr.send(null);

//         xhr.onreadystatechange = function() {

            
//             if (xhr.readystate === 4) {


//                 if (xhr.status === 200) {

//                     resolve(JSON.parse(xhr.responseText));

//                 }

//             } else {

//                 reject('Usuário não encontrado.');

//             }

//         }
//     });

// }


/**
 * faz a url correspondente aos 
 * repositórios do usuário inserido
 */

function getGitRepositories() {

    return 'https://api.github.com/users/' + getInputValue() + '/repos';

}


/**
 * cria os "li's" que conterão os 
 * nomes dos repositórios
 * 
 * @param {nome do repositório} text 
 */

function createListItem(text) {

    let listBox = getListBox();


    let listItem = document.createElement('li');

    listItem.setAttribute('class', 'list-group-item');


    let listText = document.createTextNode(text);

    listItem.appendChild(listText);


    listBox.appendChild(listItem);


    return listItem;

}


/**
 * cria um texto em formato de alerta, 
 * avisando sobre algum erro ocorrido 
 * no processo
 * 
 * @param {texto da mensagem de erro} text 
 */

function createErrorMsg(text) {

    let textBox = document.createElement('p');

    textBox.setAttribute('class', 'alert alert-danger text-center lead');

    
    let msgText = document.createTextNode(text);

    textBox.appendChild(msgText);

    
    let listBox = getListBox();

    listBox.appendChild(textBox);


    return textBox;

}


/**
 * retorna o looping que imprimirá 
 * todos os repositórios em forma 
 * de lista
 */

function showGitRepositories() {

    let listBox = getListBox();
    // apaga a lista do usuário anterior
    listBox.innerHTML = '';

    createListItem('Carregando...');


    let gitURL = getGitRepositories();

    
    if (getInputValue() !== undefined && getInputValue() !== '') {

        /**
         * arrecada todos os dados 
         * correspondentes à URL 
         * referenciada
         */

        /**
         * "resolve.json()" converte o 
         * conteúdo requisitado de JSON 
         * para array
         */

        fetch(gitURL)
        .then(resolve => resolve.json())
        .then(function(response) {

            let listBox = getListBox();
            // apaga a mensage de "Carregando..."
            listBox.innerHTML = '';

            
            /**
             * coloca cada repositório 
             * dentro de um li, 
             * separadamente
             */

            for (repository of response) {

                /**
                 * referencia a propriedade 
                 * "name" em que estão 
                 * os nomes dos repositórios
                 */

                createListItem(repository.name);

            }

        })
        .catch(function() {

            createErrorMsg('Nenhum usuário encontrado.');

        });

    } else {

        listBox.innerHTML = '';

        createErrorMsg('Nenhum usuário encontrado.');

    }

}