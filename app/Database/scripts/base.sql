CREATE DATABASE biblioteca;

USE biblioteca
-- mantenimiento/*
CREATE TABLE
	categorias (
		id INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(70) NOT NULL
	) ENGINE = INNODB;

CREATE TABLE
	subcategorias (
		id INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(70) NOT NULL,
		categoria_id INT NOT NULL,
		FOREIGN KEY (categoria_id) REFERENCES categorias (id)
	) ENGINE = INNODB;

CREATE TABLE
	editoriales (
		id INT AUTO_INCREMENT PRIMARY KEY,
		editorial VARCHAR(70) NOT NULL,
		nacionalidad VARCHAR(70) NOT NULL
	) ENGINE = INNODB;

-- */mantenimiento

CREATE TABLE
	recursos (
		id INT AUTO_INCREMENT PRIMARY KEY,
		UUID CHAR(36) NULL,
		subcategoria_id INT NOT NULL,
		editorial_id INT NOT NULL,
		tipo ENUM ('FISICO', 'DIGITAL'),
		titulo VARCHAR(255),
		anio_publicacion CHAR(4) NOT NULL,
		isbn CHAR(13) NOT NULL,
		num_paginas SMALLINT NOT NULL,
		ruta_portada TEXT NULL,
		ruta_recurso TEXT NULL,
		estado BOOL,
		created_at DATETIME NULL,
		updated_at DATETIME NULL,
		deleted_at DATETIME NULL
	) ENGINE = INNODB;