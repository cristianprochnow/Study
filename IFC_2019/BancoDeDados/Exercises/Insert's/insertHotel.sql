insert into cliente(cli_fone,cli_nome,cli_sexo) values
(11111001,"Usuario1","Masculino"),
(11111002,"Usuario2","Masculino"),
(11111003,"Usuario3","Masculino"),
(11111004,"Usuario4","Masculino"),
(11111005,"Usuario5","Masculino"),
(11111006,"Usuario6","Feminino"),
(11111007,"Usuario7","Feminino"),
(11111008,"Usuario8","Feminino"),
(11111009,"Usuario9","Feminino"),
(11111010,"Usuario10","Feminino");

insert into quarto(quarto_numero,quarto_andar,quarto_preco,quarto_tipo,quarto_descricao) values
(1,1,10,"Suíte","Quarto com Suíte"),
(2,1,20,"Suíte","Quarto com Suíte"),
(3,1,30,"Suíte","Quarto com Suíte"),
(4,2,40,"Comum","Quarto Comum"),
(5,2,50,"Comum","Quarto Comum"),
(6,2,60,"Comum","Quarto Comum"),
(7,3,70,"Quase Suíte","Quarto Semi-Suíte"),
(8,3,80,"Quase Suíte","Quarto Semi-Suíte"),
(9,3,90,"Quase Suíte","Quarto Semi-Suíte");

insert into ocupacao(ocup_cli_CPF,ocup_cod_quarto) values
(1,1),
(3,9),
(3,3),
(4,2),
(7,9),
(4,4),
(5,6),
(6,5),
(8,7),
(7,8);

insert into servico(serv_valor,serv_desc,serv_tipo) values
(10,"Entrega de comida no quarto","fooDelivery"),
(20,"Entrega de bebida no quarto","drinkDelivery"),
(30,"Entrega de felicidade no quarto","smileDelivery"),
(40,"Entrega de transancia no quarto","loveDelivery");

insert into reserva(res_qtdDIas,res_cli_CPF,res_cod_quarto) values
(23,1,1),
(42,3,9),
(10,3,3),
(2,4,2),
(5,7,9),
(7,4,4),
(8,5,6),
(46,6,5),
(39,8,7),
(20,7,8);

insert into serv_ocupacao(serv_ocup_cod_ocupacao,serv_ocup_cod_servico) values
(1,2),
(3,1),
(4,1),
(5,4),
(1,1),
(3,4),
(8,2),
(9,1),
(6,3),
(7,1);