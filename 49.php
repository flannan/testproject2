<?php

/**Составьте запрос, который извлекает из базы данных все имена (first_name) пользователей, отсортированных
 * по дате рождения в обратном порядке. Те записи у которых нет даты рождения, должны быть в конце списка.
 */

$mysqli = new mysqli('localhost', 'stud08', 'stud08', 'test');
$sql = <<<SQL
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    first_name varchar(255),
                     email varchar(255),
                     birthday date
);

INSERT INTO users (first_name, email, birthday) VALUES
('Sansa', 'sansa@winter.com', '1999-10-23'),
('Jon', 'jon@winter.com', '1999-10-07'),
('Daenerys', 'daenerys@drakaris.com', NULL),
('Arya', 'arya@winter.com', '2003-03-29'),
('Robb', 'robb@winter.com', '1999-11-23'),
('Brienne', 'brienne@tarth.com', '2001-04-04'),
('Tirion', 'tirion@got.com', '1975-1-11');

SELECT first_name FROM users
ORDER BY birthday DESC

SQL;

//mysqli_multi_query($mysqli, $sql);
