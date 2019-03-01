<?php

/** Создайте таблицу article_categories с двумя полями:
 *
 * id - автогенерируемый первичный ключ
 * name - текстовое поле
 *
 * Добавьте в эту таблицу две произвольные записи
 */

$mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
$sql = <<<SQL
DROP TABLE IF EXISTS article_categories;
CREATE TABLE article_categories
(
  id   MEDIUMINT NOT NULL AUTO_INCREMENT,
  name text,
  PRIMARY KEY (id)

);

INSERT INTO article_categories (name)
VALUES ('Akane Imrus'),
       ('Harrietta Ravi');
SQL;

//mysqli_multi_query($mysqli, $sql)();
