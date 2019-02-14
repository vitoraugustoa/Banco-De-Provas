use BancoDeProva;

-- ******************************************* PROCEDURE DE CADASTRO DE USUARIOS ***************************************
DELIMITER $$

CREATE PROCEDURE spInsereUsuario(
IN Login varchar(50),
IN Senha varchar(50),
IN Nome varchar(50))
BEGIN
DECLARE excessao SMALLINT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excessao = 1;
IF (Login <> "" AND Senha <> "" AND Nome <> "") THEN

START TRANSACTION;

INSERT INTO Usuario VALUES(null,Login,Senha,Nome);

IF excessao = 1
THEN
SELECT 'Erro ao inserir o novo usuario, tente novamente mais tarde!' AS Msg;
ROLLBACK;

ELSE
SELECT 'Cadastro efetuado com sucesso' AS Msg;
COMMIT;

END IF;
ELSE
SELECT 'Forneça todos os dados para preenchimento necessario' AS Msg;
END IF;

END $$
DELIMITER ;

-- ******************************************* PROCEDURE DE CADASTRO DE TAGS ***************************************

DELIMITER $$

CREATE PROCEDURE spInsereTags(

IN Nome varchar(50))
BEGIN
DECLARE excessao SMALLINT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excessao = 1;
IF ( Nome <> "") THEN

START TRANSACTION;

INSERT INTO Tag VALUES(null,Nome);

IF excessao = 1
THEN
SELECT 'Erro ao inserir a nova tag, tente novamente mais tarde!' AS Msg;
ROLLBACK;

ELSE
SELECT 'Cadastro efetuado com sucesso' AS Msg;
COMMIT;

END IF;
ELSE
SELECT 'Forneça todos os dados para preenchimento necessario' AS Msg;
END IF;

END $$
DELIMITER ;

-- ******************************************* PROCEDURE DE CADASTRO DE CURSOS ***************************************

DELIMITER $$

CREATE PROCEDURE spInsereCurso(

IN Nome varchar(50))
BEGIN
DECLARE excessao SMALLINT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excessao = 1;
IF ( Nome <> "") THEN

START TRANSACTION;

INSERT INTO curso VALUES(null,Nome);

IF excessao = 1
THEN
SELECT 'Erro ao inserir o novo curso, tente novamente mais tarde!' AS Msg;
ROLLBACK;

ELSE
SELECT 'Cadastro efetuado com sucesso' AS Msg;
COMMIT;

END IF;
ELSE
SELECT 'Forneça todos os dados para preenchimento necessario' AS Msg;
END IF;

END $$
DELIMITER ;

-- ******************************************* PROCEDURE DE CADASTRO DE MATERIAS ***************************************

DELIMITER $$

CREATE PROCEDURE spInsereMaterias(

IN Nome varchar(50),
IN IdCurso int)
BEGIN
DECLARE excessao SMALLINT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excessao = 1;
IF ( Nome <> "" AND IdCurso <> "" ) THEN

START TRANSACTION;

INSERT INTO Materia VALUES(null,Nome,IdCurso);

IF excessao = 1
THEN
SELECT 'Erro ao inserir a nova materia, tente novamente mais tarde!' AS Msg;
ROLLBACK;

ELSE
SELECT 'Cadastro efetuado com sucesso' AS Msg;
COMMIT;

END IF;
ELSE
SELECT 'Forneça todos os dados para preenchimento necessario' AS Msg;
END IF;

END $$
DELIMITER ;

-- ******************************************* PROCEDURE DE CADASTRO DE GABARITO ***************************************

DELIMITER $$

CREATE PROCEDURE spInsereGabarito(


IN IdProva int)
BEGIN
DECLARE excessao SMALLINT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excessao = 1;
IF (  IdProva <> "" ) THEN

START TRANSACTION;

INSERT INTO Gabarito VALUES(null,IdCurso);

IF excessao = 1
THEN
SELECT 'Erro ao inserir o gabarito, tente novamente mais tarde!' AS Msg;
ROLLBACK;

ELSE
SELECT 'Cadastro efetuado com sucesso' AS Msg;
COMMIT;

END IF;
ELSE
SELECT 'Forneça todos os dados para preenchimento necessario' AS Msg;
END IF;

END $$
DELIMITER ;

-- ******************************************* PROCEDURE DE CADASTRO DE PROVAS ***************************************

DELIMITER $$

CREATE PROCEDURE spInsereProva(

IN Nivel VARCHAR(50),
IN Situacao VARCHAR(50),
IN Valor INT,
IN IdQuestao INT,
IN IdUsuario INT,
IN IdMateria INT,
IN IdTag INT,
IN IdCurso INT)
BEGIN
DECLARE excessao SMALLINT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excessao = 1;
IF ( Nivel <> "" AND Situacao <> "" AND Valor <> ""AND IdQuestao <> ""AND IdUsuario <> ""AND IdMateria <> ""AND IdTag <> ""AND IdCurso <> "") THEN

START TRANSACTION;

INSERT INTO Prova VALUES(null,Nivel, Situacao, Valor, IdQuestao, IdUsuario, IdMateria, IdTag, IdCurso);

IF excessao = 1
THEN
SELECT 'Erro ao inserir a nova prova, tente novamente mais tarde!' AS Msg;
ROLLBACK;

ELSE
SELECT 'Cadastro efetuado com sucesso' AS Msg;
COMMIT;

END IF;
ELSE
SELECT 'Forneça todos os dados para preenchimento necessario' AS Msg;
END IF;

END $$
DELIMITER ;

-- ******************************************* PROCEDURE DE CADASTRO DE QUESTÃO ***************************************

DELIMITER $$

CREATE PROCEDURE spInsereQuestao(

IN Pergunta VARCHAR(2000),
IN Resposta VARCHAR(1000),
IN Classificao VARCHAR(50),
IN IdUsuario INT,
IN IdMateria INT,
IN IdTag INT,
IN IdCurso INT)
BEGIN
DECLARE excessao SMALLINT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excessao = 1;
IF ( Pergunta <> "" AND Resposta <> "" AND Classificao <> "" AND IdUsuario <> ""AND IdMateria <> ""AND IdTag <> ""AND IdCurso <> "") THEN

START TRANSACTION;

INSERT INTO Questao VALUES(null,Pergunta, Resposta, Classificao,  IdUsuario, IdMateria, IdCurso, IdTag);

IF excessao = 1
THEN
SELECT 'Erro ao inserir a nova questão, tente novamente mais tarde!' AS Msg;
ROLLBACK;

ELSE
SELECT 'Cadastro efetuado com sucesso' AS Msg;
COMMIT;

END IF;
ELSE
SELECT 'Forneça todos os dados para preenchimento necessario' AS Msg;
END IF;

END $$
DELIMITER ;

-- ******************************************* PROCEDURE DE CADASTRO DE RASCUNHO ***************************************
DELIMITER $$

CREATE PROCEDURE spInsereRascunho(

IN IdUsuario INT,
IN IdProva INT,
IN IdQuestao int)
BEGIN
DECLARE excessao SMALLINT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excessao = 1;
IF (  IdUsuario <> ""AND IdProva<> "" AND IdQuestao <>"") THEN

START TRANSACTION;

INSERT INTO Rascunho VALUES(null,  IdUsuario, IdProva, IdQuestao);

IF excessao = 1
THEN
SELECT 'Erro ao inserir o novo rascunho, tente novamente mais tarde!' AS Msg;
ROLLBACK;

ELSE
SELECT 'Cadastro efetuado com sucesso' AS Msg;
COMMIT;

END IF;
ELSE
SELECT 'Forneça todos os dados para preenchimento necessario' AS Msg;
END IF;

END $$
DELIMITER ;

-- ******************************************* PROCEDURE DE UPDATE DE USUARIO ***************************************

DELIMITER $$

CREATE PROCEDURE spUpdateUsuario(
IN IdUser INT,
IN Login varchar(50),
IN Senha varchar(50),
IN Nome varchar(50))
BEGIN
DECLARE excessao SMALLINT DEFAULT 0;
DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excessao = 1;
IF (IdUser <> "" AND Login <> "" AND Senha <> "" AND Nome <> "") THEN

START TRANSACTION;
UPDATE Usuario SET login = Login,
				   senha = Senha,
                   nome = Nome 
				WHERE 	IdUsuario = IdUser;
                
				

IF excessao = 1
THEN
SELECT 'Erro ao atualizar daddos do usuario, tente novamente mais tarde!' AS Msg;
ROLLBACK;

ELSE
SELECT 'atualização efetuado com sucesso' AS Msg;
COMMIT;

END IF;
ELSE
SELECT 'Forneça todos os dados para preenchimento necessario' AS Msg;
END IF;

END $$
DELIMITER ;

-- ******************************************* PROCEDURE DE PESQUISA DE USUARIO POR usuario/login ***************************************

delimiter $

CREATE PROCEDURE spSelecteUsuarioUser(IN user varchar(50))
BEGIN

select * from Usuario where login = user ;
				
				
END $
DELIMITER ;


-- ****************************************** BUSCA TODAS AS TAGS ****************************************************
delimiter $

CREATE PROCEDURE spSelecteTag()
BEGIN

select * from Tag;
				
				
END $
DELIMITER ;
-- ****************************************** BUSCA  TAG PELA ID****************************************************
delimiter $

CREATE PROCEDURE spSelecteTagId(IN id  int )
BEGIN

select * from Tag where IdTag = id;
				
				
END $
DELIMITER ;

-- ************************************************** EDITA TAG ********************************************
delimiter $

CREATE PROCEDURE spupadateTag(IN id  int, in nome varchar (50) )
BEGIN

UPDATE Tag SET nome = Nome WHERE IdTag = id;
				
				
END $
DELIMITER ;

-- **************************************** RETORNA TDOS OS RASCUNHO DE PROVA ************************************
delimiter $

CREATE PROCEDURE spSelecteRascunho( )
BEGIN

select * from Rascunho;
				
				
END $
DELIMITER ;

-- ****************************************************** RETORNA OS RASCUNHO DE PROVA POR USUARIO ***************************
delimiter $

CREATE PROCEDURE spSelecteRascunhoUsuario( in idusu int )
BEGIN

select * from Rascunho where IdUsuario = idusu;
				
				
END $
DELIMITER ;

-- ********************************************************** RETORNA OS RASCUNHO DE PORVA  POR ID **************************************
delimiter $

CREATE PROCEDURE spSelecteRascunhoId( in id int )
BEGIN

select * from Rascunho where IdRascunho = id;
				
				
END $
DELIMITER ;

-- ***************** DELETA  OS RASCUNHO ****************************

delimiter $

CREATE PROCEDURE spDeleteRascunhoId( in id int )
BEGIN

delete from Rascunho where IdRascunho = id;
				
				
END $
DELIMITER ;
-- ****************** RETORNA OS RASCUNHOS DE ACORDO A PROVA *********

delimiter $

CREATE PROCEDURE spDeleteRascunhoIdProva( in id int )
BEGIN

delete from Rascunho where IdProva = id;
				
				
END $
DELIMITER ;
-- *************************************************** busca provas ******************
delimiter $

CREATE PROCEDURE spSelecteProva()
BEGIN

select * from Prova;
				
				
END $
DELIMITER ;
-- *************
delimiter $

CREATE PROCEDURE spSelecteProvaId(IN id int)
BEGIN

select * from Prova where IdProva = id;
				
				
END $
DELIMITER ;
-- *****
delimiter $

CREATE PROCEDURE spSelecteProvaIdUsuario(IN id int)
BEGIN

select * from Prova where IdUsuario = id;
				
				
END $
DELIMITER ;

-- *****
delimiter $

CREATE PROCEDURE spSelecteProvaMateria(IN id int)
BEGIN

select * from Prova where IdMateria = id;
				
				
END $
DELIMITER ;
-- *****
delimiter $

CREATE PROCEDURE spSelecteProvaCurso(IN id int)
BEGIN

select * from Prova where IdCurso_1 = id;
				
				
END $
DELIMITER ;
-- *****
delimiter $

CREATE PROCEDURE spSelecteProvaTag(IN id int)
BEGIN

select * from Prova where IdTag= id;
				
				
END $
DELIMITER ;