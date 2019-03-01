<?php

/** Создайте таблицу cars со следующими полями:
 * user_first_name - имя пользователя (соответствующее имени в таблице users)
 * brand - марка машины
 * model - конкретная модель
 *
 * Добавьте в таблицу users две произвольные записи. (смотрите структуру таблицы внутри базы)
 * Добавьте в таблицу cars 5 произвольных записей.
 * Две из них должны указывать на одного пользователя (соответствие по имени пользователя), а три других - на другого.
 *
 * Далее создать функции php, которые позволит реализовать перечисленные выше запросы */

function createTableCars()
{
    $mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
    $sql = <<<SQL
DROP TABLE IF EXISTS cars;
CREATE TABLE cars
(
  first_name varchar(255),
  brand      varchar(255),
  model      text
);
SQL;

    return mysqli_multi_query($mysqli, $sql);

}

/** Добавьте в таблицу users две произвольные записи. (смотрите структуру таблицы внутри базы)
 *
 */

function addUsers()
{
    $mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
    $sql = <<<SQL
INSERT INTO users (first_name, last_name)
VALUES ('Akane', 'Imrus'),
       ('Harrietta', 'Ravi');
SQL;
    return mysqli_query($mysqli, $sql);
}

/** Добавьте в таблицу cars 5 произвольных записей.
 *  Две из них должны указывать на одного пользователя (соответствие по имени пользователя), а три других - на другого.
 */

function addCars()
{
    $mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
    $sql = <<<SQL
INSERT INTO cars (first_name, brand, model)
VALUES ('Akane', 'Smart', 'Fortwo'),
       ('Akane', 'Volkswagen', 'Passat'),
       ('Akane', 'Audi', 'A4'),
       ('Harrietta', 'Chevrolet', 'Silverado'),
       ('Harrietta', 'Chevrolet', 'Suburban');
SQL;
    return mysqli_query($mysqli, $sql);
}

//var_export(createTableCars());
//var_export(addUsers());
//var_export(addCars());
//echo "\n";
