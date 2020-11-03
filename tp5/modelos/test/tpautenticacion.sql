create table usuario(
	idusuario bigint(20) PRIMARY KEY AUTO_INCREMENT,
    usnombre varchar(50),
    uspass int(11),
    usmail varchar(50),
    usdeshabilitado timestamp
);

create table rol(
	idrol bigint(20) PRIMARY KEY AUTO_INCREMENT,
    rodescripcion varchar(50)
);

create table usuariorol (
    idusuario bigint(20),
    idrol bigint(20),
    PRIMARY KEY (idusuario, idrol),
    FOREIGN KEY (idusuario) REFERENCES usuario(idusuario) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (idrol) REFERENCES rol(idrol) ON UPDATE CASCADE ON DELETE CASCADE
);