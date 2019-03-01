<?php

/** Напишите следующие запросы:
 *
 * Далее создать функцию php, которая позволит реализовать перечисленные выше запросы
 *
 */

function prepareTables()
{
    $mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
    $sql = <<<SQL
DROP TABLE IF EXISTS users;
CREATE TABLE users
(
  first_name varchar(255),
  email      varchar(255),
  manager    boolean
);

INSERT INTO users (first_name, email)
VALUES ('Sansa', 'sansa@winter.com'),
       ('Tirion', 'tirion@got.com');

SQL;

    return mysqli_multi_query($mysqli, $sql);
}

/** Запрос, который удаляет пользователя с именем Sansa
 *
 */

function removeSansa()
{
    $mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
    $sql = <<<SQL
    DELETE
FROM users
WHERE first_name = 'Sansa';
SQL;
    return mysqli_query($mysqli, $sql);
}

/** Запрос, который вставляет в базу пользователя с именем Arya и почтой arya@winter.com
 *
 */

function addArya()
{
    $mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
    $sql = <<<SQL
INSERT INTO users (first_name, email)
VALUES ('Arya', 'arya@winter.com');
SQL;
    return mysqli_query($mysqli, $sql);
}

/** Запрос, который устанавливает флаг manager в true для пользователя с емейлом tirion@got.com
 *
 * @return bool|\mysqli_result
 */

function makeTyrionManager()
{
    $mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
    $sql = <<<SQL
UPDATE users
SET manager= true
WHERE email = 'tirion@got.com';
SQL;
    return mysqli_query($mysqli, $sql);
}

//prepareTables();
//var_export(prepareTables());
//var_export(removeSansa());
//var_export(addArya());
//var_export(makeTyrionManager());
