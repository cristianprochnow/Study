algoritmo "Senha"
var
senha,senha2,usuario,usuario2:caracter
inicio
escreval("Bem-vindo à tela de login do usuário.")
escreval("")
escreval("Vamos iniciar fazendo seu cadastro no sistema.")
escreval("")
escreval("")

escreva("Digite seu novo nome de usuário: ")
leia(usuario)
escreval("")

escreva("Digite uma senha: ")
leia(senha)
escreval("")

escreva("Confirme sua nova senha: ")
leia(senha)
escreval("")

escreval("Cadastro bem sucedido.")
escreval("")
escreval("")
escreval("Agora você será redirecionado à tela de login do usuário.")
escreval("")
escreval("")


escreval("Bem vindo ao sistema de login do usuário.")

escreva("Digite seu nome de usuário: ")
leia(usuario2)
escreval("")

escreva("Digite sua senha: ")
leia(senha2)
escreval("")

se (senha2=senha) e (usuario2=usuario) entao
escreval("Login bem secedido.")
senao
enquanto(senha2<>senha) e (usuario2<>usuario)faca
escreval("Usuário ou senha inválidos, tente novamente.")
escreval("")
escreval("")

escreva("Digite seu nome de usuário: ")
leia(usuario2)
escreval("")

escreva("Digite sua senha: ")
leia(senha2)
escreval("")

se (senha2=senha) e (usuario2=usuario) entao
escreval("Login bem secedido.")
senao
fimse

fimse
fimalgoritmo
