-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;

DROP TABLE `Rascunho`;


DROP TABLE `Gabarito`;


DROP TABLE `CadernoProva`;


DROP TABLE `Questao`;


DROP TABLE `Prova`;


DROP TABLE `Materia`;


DROP TABLE `Usuario`;


DROP TABLE `Tag`;


DROP TABLE `Curso`;



-- ************************************** `Usuario`

CREATE TABLE `Usuario`
(
 `IdUsuario` int NOT NULL ,
 `login`     varchar(50) NOT NULL ,
 `senha`     varchar(50) NOT NULL ,
 `nome`      varchar(100) NOT NULL ,
PRIMARY KEY (`IdUsuario`)
);






-- ************************************** `Tag`

CREATE TABLE `Tag`
(
 `IdTag` int NOT NULL ,
 `nome`  varchar(50) NOT NULL ,
PRIMARY KEY (`IdTag`)
);






-- ************************************** `Curso`

CREATE TABLE `Curso`
(
 `IdCurso` int NOT NULL ,
 `nome`    varchar(100) NOT NULL ,
PRIMARY KEY (`IdCurso`)
);






-- ************************************** `Materia`

CREATE TABLE `Materia`
(
 `IdMateria` int NOT NULL ,
 `nome`      varchar(50) NOT NULL ,
 `IdCurso`   int NOT NULL ,
PRIMARY KEY (`IdMateria`),
KEY `fkIdx_41` (`IdCurso`),
CONSTRAINT `FK_41` FOREIGN KEY `fkIdx_41` (`IdCurso`) REFERENCES `Curso` (`IdCurso`)
);






-- ************************************** `Questao`

CREATE TABLE `Questao`
(
 `IdQuestao`   int NOT NULL ,
 `pergunta`    text NOT NULL ,
 `resposta`    text NOT NULL ,
 `classificao` varchar(50) NOT NULL ,
 `IdUsuario`   int NOT NULL ,
 `IdMateria`   int NOT NULL ,
 `IdCurso`     int NOT NULL ,
 `IdTag`       int NOT NULL ,
PRIMARY KEY (`IdQuestao`),
KEY `fkIdx_50` (`IdUsuario`),
CONSTRAINT `FK_50` FOREIGN KEY `fkIdx_50` (`IdUsuario`) REFERENCES `Usuario` (`IdUsuario`),
KEY `fkIdx_59` (`IdMateria`),
CONSTRAINT `FK_59` FOREIGN KEY `fkIdx_59` (`IdMateria`) REFERENCES `Materia` (`IdMateria`),
KEY `fkIdx_62` (`IdCurso`),
CONSTRAINT `FK_62` FOREIGN KEY `fkIdx_62` (`IdCurso`) REFERENCES `Curso` (`IdCurso`),
KEY `fkIdx_71` (`IdTag`),
CONSTRAINT `FK_71` FOREIGN KEY `fkIdx_71` (`IdTag`) REFERENCES `Tag` (`IdTag`)
);






-- ************************************** `Prova`

CREATE TABLE `Prova`
(
 `IdProva`   int NOT NULL ,
 `nivel`     varchar(50) NOT NULL ,
 `situacao`  varchar(50) NOT NULL ,
 `valor`     varchar(50) NOT NULL ,
 `IdUsuario` int NOT NULL ,
 `IdMateria` int NOT NULL ,
 `IdTag`     int NOT NULL ,
 `IdCurso_1` int NOT NULL ,
PRIMARY KEY (`IdProva`),
KEY `fkIdx_47` (`IdUsuario`),
CONSTRAINT `FK_47` FOREIGN KEY `fkIdx_47` (`IdUsuario`) REFERENCES `Usuario` (`IdUsuario`),
KEY `fkIdx_56` (`IdMateria`),
CONSTRAINT `FK_56` FOREIGN KEY `fkIdx_56` (`IdMateria`) REFERENCES `Materia` (`IdMateria`),
KEY `fkIdx_68` (`IdTag`),
CONSTRAINT `FK_68` FOREIGN KEY `fkIdx_68` (`IdTag`) REFERENCES `Tag` (`IdTag`),
KEY `fkIdx_83` (`IdCurso_1`),
CONSTRAINT `FK_83` FOREIGN KEY `fkIdx_83` (`IdCurso_1`) REFERENCES `Curso` (`IdCurso`)
);






-- ************************************** `Rascunho`

CREATE TABLE `Rascunho`
(
 `IdRascunho` int NOT NULL ,
 `IdProva`    int NOT NULL ,
 `IdUsuario`  int NOT NULL ,
PRIMARY KEY (`IdRascunho`),
KEY `fkIdx_77` (`IdProva`),
CONSTRAINT `FK_77` FOREIGN KEY `fkIdx_77` (`IdProva`) REFERENCES `Prova` (`IdProva`),
KEY `fkIdx_80` (`IdUsuario`),
CONSTRAINT `FK_80` FOREIGN KEY `fkIdx_80` (`IdUsuario`) REFERENCES `Usuario` (`IdUsuario`)
);






-- ************************************** `Gabarito`

CREATE TABLE `Gabarito`
(
 `IdGabarito` int NOT NULL ,
 `IdProva`    int NOT NULL ,
 `IdQuestao`  int NOT NULL ,
PRIMARY KEY (`IdGabarito`),
KEY `fkIdx_104` (`IdQuestao`),
CONSTRAINT `FK_104` FOREIGN KEY `fkIdx_104` (`IdQuestao`) REFERENCES `Questao` (`IdQuestao`),
KEY `fkIdx_89` (`IdProva`),
CONSTRAINT `FK_89` FOREIGN KEY `fkIdx_89` (`IdProva`) REFERENCES `Prova` (`IdProva`)
);






-- ************************************** `CadernoProva`

CREATE TABLE `CadernoProva`
(
 `Id`        int NOT NULL AUTO_INCREMENT ,
 `IdProva`   int NOT NULL ,
 `IdCurso`   int NOT NULL ,
 `IdUsuario` int NOT NULL ,
 `IdQuestao` int NOT NULL ,
PRIMARY KEY (`Id`),
KEY `fkIdx_101` (`IdCurso`),
CONSTRAINT `FK_101` FOREIGN KEY `fkIdx_101` (`IdCurso`) REFERENCES `Curso` (`IdCurso`),
KEY `fkIdx_110` (`IdUsuario`),
CONSTRAINT `FK_110` FOREIGN KEY `fkIdx_110` (`IdUsuario`) REFERENCES `Usuario` (`IdUsuario`),
KEY `fkIdx_113` (`IdQuestao`),
CONSTRAINT `FK_113` FOREIGN KEY `fkIdx_113` (`IdQuestao`) REFERENCES `Questao` (`IdQuestao`),
KEY `fkIdx_98` (`IdProva`),
CONSTRAINT `FK_98` FOREIGN KEY `fkIdx_98` (`IdProva`) REFERENCES `Prova` (`IdProva`)
);





