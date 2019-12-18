/*
3) Cruc que retorne o preço unitário do produto acrescido de 2.5 %, mas somente para os
produtos que o atributo qtd_emb preenchido.
*/

SELECT ROUND(((preco_unit * 0.25) + preco_unit), 2) AS precoComAcrescimo 
FROM produto 
WHERE qtd_emb IS NOT NULL;

# "More or less"