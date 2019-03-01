<?php

/** Напишите запрос, создающий таблицу users со следующими полями:
 *
 * id — первичный автогенерируемый ключ. username — уникально и не может быть null.
 * email — не может быть null. created_at — не может быть null.
 */

$mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
$sql = <<<SQL
DROP TABLE IF EXISTS users;
CREATE TABLE users
(
  id         MEDIUMINT    NOT NULL AUTO_INCREMENT,
  username   varchar(255) UNIQUE NOT NULL,
  email      varchar(255) NOT NULL,
  created_at timestamp    NOT NULL,
  PRIMARY KEY (id)
);
SQL;

//mysqli_multi_query($mysqli, $sql);

/**
 * Напишите запрос, создающий таблицу topics со следующими полями:
 * id — первичный автогенерируемый ключ.
 * user_id — внешний ключ.
 * body — не может быть null.
 * created_at — не может быть null.
 */

$mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
$sql = <<<SQL
DROP TABLE IF EXISTS topics;
CREATE TABLE topics
(
  id         MEDIUMINT        NOT NULL AUTO_INCREMENT,
  user_id    MEDIUMINT UNIQUE NOT NULL,
  body       text             NOT NULL,
  created_at timestamp        NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users (id) 
    ON UPDATE CASCADE
    ON DELETE NO ACTION
);
SQL;

//mysqli_multi_query($mysqli, $sql);
