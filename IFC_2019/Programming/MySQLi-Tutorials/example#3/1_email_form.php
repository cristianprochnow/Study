<form name="form1" method="post" action="email.php">
    <table>
        <tr>
            <td>Nome:</td>
            <td>
                <input class="form_campos" type="text" name="nome" size="34">
            </td>
        </tr>

        <tr>
            <td>Cidade</td>
            <td>
                <input class="form_campos" type="text" name="cidade" size=34>
            </td>
        </tr>

        <tr>
            <td>Estado:</td>
            <td>
                <input class="form_campos" type="text" name="estado" size="34">
            </td>
        </tr>

        <tr>
            <td>E-mail:</td>
            <td>
                <input class="form_campos" type="text" name="email" size="34">
            </td>
        </tr>

        <tr>
            <td>Assunto:</td>
            <td>
                <select class="form_campos" name="assunto">
                    <option class="form_campos" value="Opinião" selected>Opinião</option>
                    <option class="form_campos" value="Sugestão">Sugestão</option>
                    <option class="form_campos" value="Parceria">Parceria</option>
                    <option class="form_campos" value="Reclamação">Reclamação</option>
                    <option class="form_campos" value="Outros">Outros</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Mensagem:</td>
            <td>
                <textarea class="form_campos" name="mensagem" cols="34" rows="4"></textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <br>
                    <div class="div_botao">
                        <input class="form_botao" type="submit" name="Enviar" value="Enviar Mensagem">
                        
                        <input class="form_botao" type="reset" name="Limpar" value="Limpar">
                    </div>
            </td>
        </tr>
    </table>
</form>