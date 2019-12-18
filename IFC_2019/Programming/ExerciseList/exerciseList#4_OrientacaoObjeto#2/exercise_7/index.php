<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8" />
        <title>7º Exercício</title>
    </head>

    <body>
        <div class="main-content">

            <?php if (isset($_POST['submit'])) : ?>

                <div class="answer-box">
                    <fieldset class="atom-box">
                        <?php
                
                            require_once('_class/Atomo.php');

                            if (empty($_POST['protons']) || empty($_POST['eletrons']) || empty($_POST['neutrons'])) {

                                print '<p>Preencha os campos.</p>';

                            } else {
                                
                                /** tranforma os números inseridos em número inteiros */
                                $protons = (int) trim($_POST['protons']);
                                $eletrons = (int) trim($_POST['eletrons']);
                                $neutrons = (int) trim($_POST['neutrons']);

                                $atomo = new Atomo($protons, $eletrons, $neutrons);

                                /** verifica se o número de prótons é maior que zero
                                 */
                                if ($atomo -> ehAtomo()) {

                                    /** verifica se a quantidade de nêutrons inserida
                                     *  é válida
                                     */
                                    if ($atomo -> verificarQuantidadeNeutrons()) {

                                        if ($atomo -> verificaHidrogenio()) {

                                            print '<p>' . 'Os números inseridos correspondem ao átomo de Hidrogênio.' . '</p>';

                                        } elseif ($atomo -> ehIon()) {

                                            print '<p>' . 'Este átomo, com ' . $atomo -> getProtons() . ' próton(s), ' . $atomo -> getEletrons() . ' elétron(s) e ' . $atomo -> getNeutrons() . ' nêutron(s), é um ' . $atomo -> verificaCationOuAnion() . '.' . '</p>';

                                        } else {
                                            
                                            print '<p>' . 'O átomo inserido possui ' . $atomo -> getProtons() . ' próton(s), ' . $atomo -> getEletrons() . ' elétron(s) e ' . $atomo -> getNeutrons() . ' nêutron(s).' . '</p>';

                                        }

                                    } else {
                                        
                                        print '<p>Número de nêutrons inserido é inválido. Insira valores maiores que 0.</p>';

                                    }

                                } else {
                                    
                                    print '<p>Número de prótons inválido. Insira um número maior que 0.</p>';

                                }

                            }

                        ?>
                    </fieldset>
                </div>

            <?php endif; ?>

            <div class="form-box">
                <form method="POST" action="index.php">
                    <fieldset class="atom-box">
                        <legend> <b>Átomo</b> </legend>

                        <p>
                            <input type="number" name="protons" placeholder="Prótons" />
                            <input type="number" name="eletrons" placeholder="Elétrons" />
                            <input type="number" name="neutrons" placeholder="Nêutrons" />
                        </p>

                        <p>
                            <input type="reset" name="reset" value="Redefinir" />
                            <input type="submit" name="submit" value="Enviar" />
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>