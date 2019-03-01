<?php

/** Напишите запрос обновляющий таблицу структуры:
 *
 * CREATE TABLE users (
 * id bigint PRIMARY KEY AUTO_INCREMENT,
 * email varchar(255) NOT NULL,
 * age integer,
 * name varchar(255)
 * );
 *
 * В структуру:
 *
 * CREATE TABLE users (
 * id bigint PRIMARY KEY AUTO_INCREMENT,
 * email varchar(255) NOT NULL UNIQUE,
 * first_name varchar(255) NOT NULL,
 * created_at timestamp
 * );
 *
 * name и first_name - одна и та же колонка.
 */

$mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
$sql = <<<SQL
DROP TABLE IF EXISTS users CASCADE;
CREATE TABLE users
(
  id    bigint PRIMARY KEY AUTO_INCREMENT,
  email varchar(255) NOT NULL,
  age   integer,
  name  varchar(255)
);

INSERT INTO users (email, age, name)
VALUES ('noc@mail.com', 44, 'mike');

ALTER TABLE users
CHANGE COLUMN name first_name varchar(255) NOT NULL,
CHANGE COLUMN email email varchar(255) NOT NULL UNIQUE,
ADD COLUMN created_at timestamp,
DROP COLUMN age

SQL;

//mysqli_multi_query($mysqli, $sql);
