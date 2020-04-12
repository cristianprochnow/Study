$(function() {

    $('[data-toggle="popover"]').popover();

})


/**
 * pega o input HTML com o ID que for passado 
 * como argumento
 * 
 * @param {ID do elemento manuseado} id 
 */

function getInput(id) {

    return document.querySelector(id);

}


/**
 * pega o valor inserido no elemento referenciado 
 * na função getInput();
 */

function getValue() {

    let input = getInput('#ageInput');

    
    /**
     * verifica se o campo do formulário 
     * foi preenchido
     */

    if (input.value !== '') {

        return input.value;

    }

}


/**
 * função que chega a idade inserida, 
 * usando de uma promise para realizar 
 * o processo, sendo assim, mais prática 
 * a execução deste script
 */

function ageCheck() {

    return new Promise(function(resolve, reject) {


        /**
         * verifica se o campo foi preenchido
         */
        
        if (getValue() !== undefined) {


            if (getValue() >= 18) {

                resolve('É de maior de idade.');
                
            } else {
    
                reject('Ainda possui menos de 18 anos.');
    
            }

        }

    });

}


/**
 * ativa a execução da função ageCheck(). 
 * Toda vez que o botão for clicado, essa 
 * função será chamada
 */

function playAgeCheck() {

    return ageCheck()
    .then(function(response) {

        /**
         * inprime a mensagem na tela depois 
         * de 2 segundos
         */

        setTimeout(function() {

            let msgBox = document.querySelector("#msgBox");

            /**
             * limpa o conteúdo do "h1", caso 
             * já tenha sido preenchido por essa 
             * mesma função na vez anterior que 
             * foi chamada
             */

            msgBox.innerHTML = '';

            msgBox.appendChild(document.createTextNode(response));


        }, 2000)

    })
    .catch(function(error) {

        setTimeout(function() {

            let msgBox = document.querySelector("#msgBox");

            msgBox.appendChild(document.createTextNode(error));

        }, 2000)

    });

}