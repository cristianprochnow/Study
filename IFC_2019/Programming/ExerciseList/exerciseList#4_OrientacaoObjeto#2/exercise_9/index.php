<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8" />
        <title>9º Exercício</title>
    </head>

    <body>
        <div class="main-content">
            <div class="answer-box">
                <?php
                
                    if (isset($_POST['submit'])) {

                        ?> <fieldset class="clip-box"> <?php

                            require_once('_class/AudioClip.php');

                            $canais = (int) trim($_POST['canais']);
                            $resolucao = (int) trim($_POST['resolucao']);
                            $taxaAmostragem = (int) trim($_POST['amostragem']);
                            $duracao = (int) trim($_POST['duracao']);


                            if (empty($canais) || empty($resolucao) || empty($taxaAmostragem) || empty($duracao)) {

                                $audioClipPadrao = new AudioClip($canais, $resolucao, $taxaAmostragem);
                                $audioClipPadrao -> definirQualidadeMinimaPadrao();

                                print '<p>Campo(s) não preenchido(s). Qualidade padrão definida: </p>';
                                print '<p>Canais: ' . $audioClipPadrao -> getCanais() . ' | Resolução: ' . $audioClipPadrao -> getResolucao() . ' Bits | Taxa de Amostragem: ' . $audioClipPadrao -> getTaxaAmostragem() . ' amostras por segundo | Duração: ' . $audioClipPadrao -> definirDuracaoMinimaPadrao() . ' segundos. </p>';

                                $audioClipPadrao -> tamDados();
                                $tamanhoAudioClip = $audioClipPadrao -> converterBytesMegabytes();

                                print '<p>Tamanho do áudio clipe: ' . $tamanhoAudioClip . ' MB</p>';

                            } else {
                                
                                $audioClipPadrao = new AudioClip($canais, $resolucao, $taxaAmostragem);

                                $audioClipPadrao -> setDuracao($duracao);

                                if ($audioClipPadrao -> ehQualidadeEstudio()) {

                                    $audioClipPadrao -> tamDados();
                                    $tamanhoTotalArquivo = $audioClipPadrao -> converterBytesMegabytes();

                                    print '<p>Seu arquivo possui qualidade de estúdio.</p>';
                                    print '<p>Tamanho do áudio clipe: ' . $tamanhoTotalArquivo . ' MB</p>';

                                } else {

                                    $audioClipPadrao -> tamDados();
                                    $tamanhoTotalArquivo = $audioClipPadrao -> converterBytesMegabytes();

                                    print '<p>Tamanho do áudio clipe: ' . $tamanhoTotalArquivo . ' MB</p>';

                                }

                            }

                        ?> </fieldset> <?php

                    }
                
                ?>
            </div>

            <div class="form-box">
                <form method="POST" action="index.php">
                    <fieldset class="clip-box">
                        <legend> <b>Áudio Clip</b> </legend>

                        <p>
                            <input type="number" name="canais" placeholder="Canais" min="0" list="canais" />

                            <datalist id="canais">
                                <option value="1">1 canal</option>
                                <option value="2">2 canais</option>
                            </datalist>


                            <input type="number" name="resolucao" placeholder="Resolução" min="0" list="resolucao" />

                            <datalist id="resolucao">
                                <option value="8">8 Bits</option>
                                <option value="16">16 Bits</option>
                                <option value="24">24 Bits</option>
                            </datalist>


                            <input type="number" name="amostragem" placeholder="Taxa de Amostragem" min="0" list="amostragem" />

                            <datalist id="amostragem">
                                <option value="22050">22050 amostras por segundo</option>
                                <option value="44100">44100 amostras por segundo</option>
                                <option value="88200">88200 amostras por segundo</option>
                            </datalist>


                            <input type="number" name="duracao" placeholder="Duração" min="0" />
                        </p>

                        <p>
                            <input type="reset" name="reset" value="Redefinir" />
                            <input type="submit" name="submit" value="Enviar Formulário" />
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>