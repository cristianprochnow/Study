<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="0_style.css">
        <meta charset="UTF-8">
        <title>Formulário de Contato Demo</title>
    </head>

    <body>
        <div id="stylized" class="myform">
            <form id="form1" id="form1" action="1_mail.php" method="POST">
                <label>Nome
                    <span class="small">Inclua seu Nome</span>
                </label>
                    <input type="text" name="name">

                <label>Email
                    <span class="small">Entre um Email Válido</span>
                </label>
                    <input type="text" name="email">

                <label>Telefone
                    <span class="small">Inclua o Número do Telefone</span>
                </label>
                    <input type="text" name="phone">

                <br />
                <br />

                <label>Website
                    <span class="small">Seu Website</span>
                </label>
                    <input type="text" name="website">

                <label>Prioridade
                    <span class="small">Nível de Prioridade</span>
                </label>
                    <select name="priority" size="1">
                        <option value="Baixa">Baixa</option>
                        <option value="Normal">Normal</option>
                        <option value="Alta">Alta</option>
                        <option value="Emergencia">Emergência</option>
                    </select>

                <br />
                <br />
                <br />

                <label>Tipo
                    <span class="small">Tipo do Contato</span>
                </label>
                    <select name="type" size="1">
                        <option value="update">Website Update</option>
                        <option value="change">Mudança Informação</option>
                        <option value="addition">Inclusão Informação</option>
                        <option value="new">Novos Produtos</option>
                    </select>
                
                <br />
                <br />
                <br />

                <label>Mensagem
                    <span class="small">Digite Sua Mensagem</span>
                </label>
                    <textarea name="message" rows="6" cols="25"></textarea><br />

                    <button type="submit" value="Enviar" style="margin-top:15px;">Enviar</button>

                    <div class="spacer"></div>
            </form>
        </div> <!-- end of form class -->
    </body>
</html>