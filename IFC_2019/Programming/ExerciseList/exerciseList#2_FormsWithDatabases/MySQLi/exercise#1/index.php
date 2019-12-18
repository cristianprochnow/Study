<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            1º Exercício
        </title>
    </head>

    <body>
        <div class="main-content">
            <form method="POST" action="process.php">
                <div class="main-content-title-box">
                    <h1 id="main-content-title">
                        Cadastro Escolar
                    </h1>
                </div>

                <fieldset id="member-fieldset">
                    <legend>
                        Membro
                    </legend>

                    <p class="p-input-box">
                        <input type="text" name="user-complete-name" class="inputs" id="user-complete-name-input" placeholder="Nome Completo" required>
                    </p>

                    <p class="p-input-box">
                        <input type="email" name="user-email" class="inputs" id="user-email-input" placeholder="Email" required>
                    </p>

                    <p class="p-input-box">
                        <input type="number" name="user-number" class="inputs" id="user-number-input" placeholder="Número da Camisa" required>
                    </p>

                    <p class="p-input-box">
                        <select name="user-function" class="inputs" id="function-input" required>
                            <optgroup>
                                <option value="Aluno">
                                    Aluno
                                </option>

                                <option value="Docente">
                                    Corpo Docente
                                </option>

                                <option value="Voluntario">
                                    Voluntário
                                </option>
                            </optgroup>
                        </select>
                    </p>
                </fieldset>

                <fieldset id="crew-fieldset">
                    <legend>
                        Equipe
                    </legend>

                    <p class="p-input-box">
                        <input type="text" name="crew-name" class="inputs" id="crew-name-input" placeholder="Nome da Equipe" required>
                    </p>
                </fieldset>

                <fieldset id="school-fieldset">
                    <legend>
                        Instituição Escolar
                    </legend>

                    <p class="p-input-box">
                        <input type="text" name="school-name" class="inputs" id="school-name-input" placeholder="Nome da Instituição de Ensino" required>
                    </p>

                    <p class="p-input-box">
                        <input type="text" name="school-state" class="inputs" id="school-state-input" placeholder="Estado que a Escola está localizada" list="states" required>

                        <datalist id="states">
                            <option value="AM">
                                Amazonas (AM)
                            </option>

                            <option value="RR">
                                Roraima (RR)
                            </option>

                            <option value="AP">
                                Amapá (AP)
                            </option>

                            <option value="PA">
                                Pará (PA)
                            </option>

                            <option value="TO">
                                Tocantins (TO)
                            </option>

                            <option value="RO">
                                Rondônia (RO)
                            </option>

                            <option value="AC">
                                Acre (AC)
                            </option>

                            <option value="MA">
                                Maranhão (MA)
                            </option>

                            <option value="PI">
                                Piauí (PI)
                            </option>
                            
                            <option value="CE">
                                Ceará (CE)
                            </option>

                            <option value="RS">
                                Rio Grande do Norte (RN)
                            </option>

                            <option value="PE">
                                Pernambuco (PE)
                            </option>

                            <option value="PB">
                                Paraíba (PB)
                            </option>

                            <option value="SE">
                                Sergipe (SE)
                            </option>

                            <option value="AL">
                                Alagoas (AL)
                            </option>

                            <option value="BA">
                                Bahia (BA)
                            </option>

                            <option value="MT">
                                Mato Grosso (MT)
                            </option>

                            <option value="MS">
                                Mato Grosso do Sul (MS)
                            </option>

                            <option value="GO">
                                Goiás (GO)
                            </option>

                            <option value="RJ">
                                Rio de Janeiro (RJ)
                            </option>

                            <option value="SP">
                                São Paulo (SP)
                            </option>

                            <option value="MG">
                                Minas Gerais (MG)
                            </option>

                            <option value="ES">
                                Espírito Santo (ES)
                            </option>

                            <option value="PR">
                                Paraná (PR)
                            </option>

                            <option value="SC">
                                Santa Catarina (SC)
                            </option>

                            <option value="RS">
                                Rio Grande do Sul (RS)
                            </option>
                        </datalist>
                    </p>

                    <p class="p-input-box">
                        <input type="text" name="school-city" class="inputs" id="school-city-input" placeholder="Cidade que a Escola está localizada" required>
                    </p>
                </fieldset>

                <div id="submit-buttons-box">
                    <p class="p-input-box">
                        <input type="reset" class="submit-buttons" id="reset-button">

                        <input type="submit" class="submit-buttons" id="submit-button">
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>