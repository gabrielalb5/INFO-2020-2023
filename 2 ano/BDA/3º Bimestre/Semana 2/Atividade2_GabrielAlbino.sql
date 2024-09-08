INSERT INTO cliente VALUES 
(123, 'Solange Blitz', '2563658', STR_TO_DATE('08/06/2001', '%d/%m/%Y'), 'F', 998756936),
(234, 'Carlos Santos', '2563659', STR_TO_DATE('15/05/2001', '%d/%m/%Y'), 'M', 1633032352),
(456, 'José Silva', '258963', STR_TO_DATE('31/12/2000', '%d/%m/%Y'), 'F',  1933536958);

SELECT * FROM cliente;

INSERT INTO produto VALUES 
(98, 'Coca_Cola 2L', 8),
(14, 'Escova de dente', 12.5),
(23, 'Arroz 2kg', 25),
(87, '1kg maracujá', 10);

SELECT * FROM produto;

INSERT INTO pedido VALUES 
(45, STR_TO_DATE('06/05/2021','%d/%m/%Y'), 123),
(50, STR_TO_DATE('13/09/2021','%d/%m/%Y'), 234),
(52, STR_TO_DATE('03/09/2021','%d/%m/%Y'), 456),
(53, STR_TO_DATE('13/09/2021','%d/%m/%Y'), 123);

SELECT * FROM pedido;

INSERT INTO pedido_produto VALUES 
(45,98,2),
(45,14,1),
(50,98,3),
(50,23,1),
(52,14,2),
(53,98,1),
(53,23,2);

SELECT * FROM pedido_produto;
