CREATE DATABASE BIBLIOTECA;
USE BIBLIOTECA;

-- ubigeo/*
CREATE TABLE departamentos (
  id      CHAR(2) PRIMARY KEY,
  name    VARCHAR(100) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

CREATE TABLE provincias (
  id              CHAR(4) PRIMARY KEY,
  departamento_id CHAR(2) NOT NULL,
  name            VARCHAR(100) NOT NULL,
  FOREIGN KEY (departamento_id) REFERENCES departamentos(id)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

CREATE TABLE distritos (
  id           CHAR(6) PRIMARY KEY,
  provincia_id CHAR(4) NOT NULL,
  name         VARCHAR(120) NOT NULL,
  FOREIGN KEY (provincia_id) REFERENCES provincias(id)
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4;
-- */ubigeo

CREATE TABLE libros(
	id	INT AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(200) NOT NULL,
	imagen TEXT NOT NULL
)ENGINE=INNODB;

INSERT INTO libros VALUES 
	(NULL, 'libro a', 'libroA.jpg'),
	(NULL, 'libro b', 'libroB.jpg');

SELECT * FROM libros;


CREATE TABLE editoriales(
	id	INT AUTO_INCREMENT PRIMARY KEY,
	editorial VARCHAR(200) NOT NULL,
	telefono CHAR(9) NULL,
	direccion VARCHAR(100) NULL
)ENGINE=INNODB;

SELECT * FROM editoriales;


CREATE TABLE personas(
	idpersona 	INT AUTO_INCREMENT PRIMARY KEY,
	dni			CHAR(8) NOT NULL,
	apellidos	VARCHAR(40) NOT NULL,
	nombres		VARCHAR(40) NOT NULL,
	telefono		CHAR(9)	NULL,
	distrito_id	CHAR(6) NOT NULL,
	direccion	VARCHAR(100) NULL,
	FOREIGN KEY (distrito_id) REFERENCES distritos (id)
)ENGINE=INNODB;

INSERT INTO personas VALUES 
	(NULL, '75231740', 'Luque', 'Dante', '922836571', '110210', NULL);
	
SELECT * FROM personas;


