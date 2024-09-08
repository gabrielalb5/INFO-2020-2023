USE ifsp;

CREATE TABLE LogVendas (
  nomeVendedor VARCHAR(20),
  dataVenda    DATE,
  valorVenda   DECIMAL(7,2)
);

INSERT INTO LogVendas(nomeVendedor, dataVenda, valorVenda)
VALUES ('Carlos', '2021-03-17', 1000),
  ('Carlos', '2021-03-19', 250),
  ('Carlos', '2021-03-15', 600),
  ('Carlos', '2021-03-12', 1200),
  ('Jean', '2021-03-17', 800),
  ('Jennifer', '2021-03-17', 750),                                    
  ('Jennifer', '2021-03-18', 630),
  ('Jennifer', '2021-03-19', 1900),
  ('Jennifer', '2021-03-21', 3200),
  ('Maria', '2021-03-21', 400),
  ('Maria', '2021-03-23', 600),                           
  ('Maria', '2021-03-29', 980);                                    

--1. Liste todos os registros da tabela LogVendas
SELECT * 
FROM LogVendas

--2. Liste os nomes dos vendedores
SELECT nomeVendedor
FROM LogVendas

--3. É possível não listar nomes repetidos?
SELECT DISTINCT nomeVendedor
FROM LogVendas

--4. Qual é o valor total de vendas?
SELECT SUM(valorVenda)
FROM LogVendas

--5. Qual é o valor total de vendas de cada vendedor?
SELECT nomeVendedor, SUM(valorVenda)
FROM LogVendas
GROUP BY nomeVendedor

--6. É possível incluir uma descrição para a coluna que contém os valores das vendas?
SELECT nomeVendedor, SUM(valorVenda) as 'Valor Total'
FROM LogVendas
GROUP BY nomeVendedor

--7. Qual é o número total de vendas?
SELECT COUNT(*) as 'Qtde Vendas'
FROM LogVendas

--8. Qual é o número total de vendas por vendedor?
SELECT nomeVendedor, COUNT(*) as 'Qtde Vendas'
FROM LogVendas
GROUP BY nomeVendedor

--9. Identifique a maior e a menor venda
SELECT MIN(valorVenda) as 'Menor Venda', MAX(valorVenda) as 'Maior Venda'
FROM LogVendas

--10. Identifique a maior e a menor venda de cada vendedor
SELECT nomeVendedor, MIN(valorVenda) as 'Menor Venda', MAX(valorVenda) as 'Maior Venda'
FROM LogVendas
GROUP BY nomeVendedor

--11. Qual é o valor médio de vendas entre os dias 15 e 21?
SELECT dataVenda, AVG(valorVenda) as 'Valor Médio Venda'
FROM LogVendas
WHERE dataVenda BETWEEN '2021-03-15' AND '2021-03-21'
GROUP BY dataVenda

--12. Em quais dias o total de vendas foi superior a 1000 reais?
SELECT dataVenda, SUM(valorVenda) as 'Valor Venda'
FROM LogVendas
GROUP BY dataVenda
HAVING SUM(valorVenda) > 1000

--13. Em quais dias, no período de 15/03 a 20/03, a média das vendas foi inferior a 1000 reais?
SELECT dataVenda, AVG(valorVenda) as 'Valor Médio Venda'
FROM LogVendas
WHERE dataVenda BETWEEN '2021-03-15' AND '2021-03-20'
GROUP BY dataVenda
HAVING AVG(valorVenda) < 1000

--14. Quais vendedores fecharam mais do que 2 vendas nos dias 15/03, 17/03 e 19/03?
SELECT nomeVendedor, COUNT(*) as 'Número Vendas'
FROM LogVendas
WHERE dataVenda IN ('2021-03-15', '2021-03-17', '2021-03-19')
GROUP BY nomeVendedor
HAVING COUNT(*) > 2

--15. Liste as vendas dos dias 17/03 e 19/03 ordenadas pelo valor da venda
SELECT nomeVendedor, valorVenda
FROM LogVendas
WHERE dataVenda IN ('2021-03-17', '2021-03-19')
ORDER BY valorVenda DESC

--16. Liste todos os vendedores cujo nome inicia com “J”.
SELECT nomeVendedor
FROM LogVendas
WHERE nomeVendedor LIKE ('J%');