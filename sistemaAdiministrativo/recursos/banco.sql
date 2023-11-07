CREATE TABLE fucionario(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    codigo VARCHAR(45),
   nome VARCHAR(45),
    salario VARCHAR(45),
  data_nascimento VARCHAR(45),
    cpf VARCHAR(45),
    senha VARCHAR(45),
    funcao INT
    
)ENGINE=myISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5; 

INSERT INTO fucionario(id,codigo,nome,salario,data_nascimento,cpf,senha,funcao) VALUES
(1,'111','Gilmar','4000','2000-01-01','123.123.123-12','123'1),
(2,'222','sofia',  '3000','2002-02-02','234.234.234-23','234'1),
(3,'333','xamuel', '4000','1993-03-03','345.345.345-34','345'1),
(4,'444','amanda','3000','1994-04-04','456.456.456-45','456'1),
INSERT INT funcao(id,descricao,obs) VALUES
(1,'progrmador junior','tome cuidado ele e perigoso'),
(2,'analista pleno','entrou na empresa a poco tempo'),
(3,'testador','o medo de todos os programador'),
(4,'gerente','o lider da equipe');
CREATE TABLE usuario(
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  codigo VARCHAR(45),
  nome VARCHAR(45)
  cpf VARCHAR(45),
  senha VARCHAR(45)
) ENGINE=myISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;

INSERT INTO usuario(id,codigo,nomr, cpf,senha)
(1,'123','adm' '123.123.123-12','123');

CREATE TABLE agenda (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
data DATE,
hora_inicio TIME,
hora_fim TIME,
horas TIME,
curso VARCHAR(45),
codigo VARCHAR(45),
obs TEXT,
fucionario INT
);
INSERT INTO agenda (data,hora_inicio,hora_fim, horas,curso,codigo,obs,fucionario)
VALUES ('2023-11-07','13:30:00','17:30:00','4:00:00','informatica','01','obs',1);

DELIMITER //
CREATE TRIGGER caucular_horas
BEFORE INSERT ON agenda
FOR EACH ROW
BEGIN 
SET new.horas= TIMEDIFF(NEW.hora_fim,NEW.hora_inicio);
END
// DELIMITER ; 