// função obrigatória para o botão popover
$(function () {

    $('[data-toggle="popover"]').popover()

})


/* ================================================ */
/* ===============REQUISIÇÕES AJAX================= */

/**
 * se chama JS assíncrono pois ele não vai 
 * atualizar (ou sincronizar) juntamente com 
 * a página principal. Ele será um código deveras 
 * independente, que carregará de maneira à parte 
 * em relação aos outros elementos
 */

/**
 * AJAX serve para fazer requisições do servidor 
 * sem necessitar do recarregamento da página, fazendo 
 * assim com que o processo seja mais prático
 */


/**
 * XMLHttpRequest() é a classe responsável 
 * por fazer essas requisições
 */

var xhr = new XMLHttpRequest();


/**
 * já que está pegando os dados, usa-se 
 * como método o "GET"
 */

xhr.open('GET', 'https://api.github.com/users/diego3g');
xhr.send(null);


/**
 * para o processo não ficar lento, o JS não 
 * pode esperar o resultado da requisição, já 
 * que ela acontece em separado, por isso 
 * usa-se a função abaixo, para quando houver a 
 * mudança, algum processo já ser realizado
 */

xhr.onreadystatechange = function() {


    // 4 = código de sucesso que é retornado
    if (xhr.readyState === 4) {

        /**
         * se o processo de leitura der certo, 
         * vai ser printado no console o texto 
         * da API
         */
        
        /**
         * o JSON está ali pois o resultado 
         * da requisição é um script em JSON
         */

        console.log(JSON.parse(xhr.responseText));

    }

}


/* ================================================ */
/* ===================PROMISES===================== */


/**
 * promises não influenciam na linha do tempo de 
 * processamento do JavaScript, pois independentemente 
 * se o processo deu requerido deu certo ou errado, o 
 * script JS vai continuar a execução normal, sem se 
 * preocupar com esse detalhe até então
 */

var minhaPromise = function() {

    /**
     * já que é uma Promise, esta função vai ser 
     * como uma referenciação à classe da mesma, 
     * por isso que vai retornar como se fosse uma 
     * instanciação de POO
     */

    /**
     * "resolve" e "reject", mesmo que aqui estão 
     * servindo como parâmetros da função, são 
     * funções que irão retornar algum valor na 
     * condicional posteriormente feita
     */
    
    return new Promise(function(resolve, reject) {

        /**
         * e agora, aqui dentro, coloca o código 
         * que foi usado anteriormente para fazer a 
         * requisição da API do GitHub
         */

        let xhr = new XMLHttpRequest();

        xhr.open('GET', 'https://api.github.com/users/diego3g');
        xhr.send(null);


        xhr.onreadystatechange = function() {


            /**
             * se o conteúdo for encontrado
             */

            if (xhr.readyState === 4) {


                /**
                 * 200 = código de sucesso da requisição
                 * 
                 * e a requisição for concluída com 
                 * sucesso
                 */

                if (xhr.status === 200) {

                    /**
                     * a requisição é retornada
                     * 
                     * ("resolve" cláusula para sucesso 
                     * da operação)
                     */

                    resolve(JSON.parse(xhr.responseText));

                } else {

                    /**
                     * mensagem de erro é retornada
                     * 
                     * ("reject" cláusula para erro da 
                     * operação)
                     */

                    reject('Erro na requisição!');

                }
                
            }

        }

    });

}

/**
 * chamando a função, usa-se como processamento 
 * o then-catch, que nada mais é do que algo 
 * totalmente semelhante ao try-catch do PDO
 */

/**
 * aqui chama-se a função anteriormente declarada. 
 * Caso ela execute de forma bem-sucedida, o .then 
 * será posto em prática. Porém, se um erro for retornado, 
 * o .catch entrará em ação
 */

/**
 * "response" terá o valor de "resolve", e error, o valor 
 * de "reject"
 */

/**
 * quando se lida com Promises, o lugar mais válido 
 * para se declarar o que será feito com o valor de 
 * resultado é dentro de .then/.catch, como se fosse mesmo, 
 * de fato, um try/catch
 */

minhaPromise()
    .then(function(response) {

        console.log(response);

    })
    .catch(function(error) {

        console.log(error);

    });


/* ================================================ */
/* ===============UTILIZANDO AXIOS================= */

/**
 * já que é uma dessas interfaces que te ajudam 
 * diminuindo o código total, ele consegue 
 * economizar muito código, fazendo com que todo 
 * o código usado na seção "PROMISES", vire apenas 
 * o que esta a seguir
 */

axios.get('https://api.github.com/users/diego3g')
    .then(function(response) {

        console.log(response);

    })
    .catch(function(error) {

        console.log(error);

    });