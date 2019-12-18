<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8" />
        <title>5º Exercício</title>
    </head>

    <?php
    
        if (isset($_POST['submit'])) {

            if (empty($_POST['nomeProduto']) || empty($_POST['custoProduto']) || empty($_POST['codigoProduto']) || empty($_POST['quantidadeEstoque'])) {
    
                print 'Os campos são de preenchimento obrigatório';
    
            } else {

                require_once('_class/Produto.php');
            
                $produto = new Produto($_POST['codigoProduto'], $_POST['nomeProduto']);
        
                // define o custo do produto
                $produto -> setCustoProduto($_POST['custoProduto']);
                // define que a quantidade padrão em estoque é 0
                $produto -> setQuantidadeEstoque(0);
                // e agora adiciona ao estoque a quantia que o usuário deseja
                $quantiaEstoque =  $produto -> poeEstoque($_POST['quantidadeEstoque']);

        
                if ($quantiaEstoque == 0) {
        
                    print 'O produto ' . $produto -> getName() . ', que tem como código ' . $produto -> getCodigoProduto() . ' e que custa ' . $produto -> getCustoProduto . ', não tem estoque.';
                    print "<p> <a href='index.php'>Voltar</a> </p>";

                    exit;
        
                } else {
        
                    print 'O produto ' . $produto -> getName() . ', que tem como código ' . $produto -> getCodigoProduto() . ' e que custa ' . $produto -> getCustoProduto() . ', tem ' . $quantiaEstoque . ' unidades em estoque.' ;
                    print "<p> <a href='index.php'>Voltar</a> </p>";

                    exit;
        
                }

            }

        }
    
    ?>

    <body>
        <div class="main-content">
            <div class="form-box">
                <form method="POST" action="index.php">
                    <fieldset class="produto-box">
                        <legend> <b>Produto</b> </legend>

                        <p>
                            <input type="text" name="nomeProduto" placeholder="Nome" />
                            <input type="text" name="custoProduto" placeholder="Custo" />
                        </p>

                        <p>
                            <input type="number" name="codigoProduto" placeholder="Código de Identificação" min="0" />
                            <input type="number" name="quantidadeEstoque" placeholder="Quantidade de Estoque" min="0" />
                        </p>

                        <p>
                            <input type="reset" name="reset" value="Apagar tudo" />
                            <input type="submit" name="submit" value="Enviar formulário" />
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>