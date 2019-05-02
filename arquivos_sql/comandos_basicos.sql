SELECT id,nome,datanascimento FROM agenda.contato;

INSERT INTO agenda.contato (nome,datanascimento)
	VALUES('Pedro5','2000-03-12');

UPDATE agenda.contato SET nome = 'Chaves',
datanascimento = '1960-08-22'
	where id = 3;

DELETE FROM agenda.contato where id in(9);
