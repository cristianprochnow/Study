let firstName = prompt('Qual seu nome?')
let secondName = prompt('Qual o nome de seu amigo?')

let responseMessage = `Seu nome é ${firstName} e do seu amigo é ${secondName}.`
alert(responseMessage)

const intermediateName = firstName
firstName = secondName
secondName = intermediateName

responseMessage = responseMessage = `TROCANDO... Seu nome é ${firstName} e do seu amigo é ${secondName}.`
alert(responseMessage)
