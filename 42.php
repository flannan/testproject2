<?php

/**
 * Напишите запрос создающий таблицу courses со следующими полями, запрос обернуть в функцию createTable на php
 * name типа varchar длинной 255. body типа text. created_at типа timestamp.
 *
 * Напишите запрос создающий таблицу users со следующими полями
 * first_name типа varchar длинной 255.
 * email типа varchar длинной 255.
 * manager типа boolean.
 *
 * Напишите запрос создающий таблицу course_members со следующими полями
 * user_id типа integer
 * course_id типа integer
 * created_at типа timestamp
 *
 * uses mySQLi,
 */

function createTable()
{
    $mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
    $sql = <<<SQL
    CREATE TABLE users (first_name varchar(255), email varchar(255), manager boolean);
    CREATE TABLE courses (name varchar(255), body text, created_at timestamp );
    CREATE TABLE course_members (user_id integer, course_id integer, created_at timestamp );
SQL;

    return mysqli_multi_query($mysqli, $sql);
}

/**
 * @return bool
 */
function dropTables()
{
    $mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
    $sql = <<<SQL
    DROP TABLE IF EXISTS users;
    DROP TABLE IF EXISTS courses;
    DROP TABLE IF EXISTS course_members;
SQL;
    return mysqli_multi_query($mysqli, $sql);
}

//dropTables();
//var_export(createTable());
//echo "\n";
