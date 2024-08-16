<?php

use pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . 'banco.sqlite';

$pdo = new PDO('sqlite:'.$databasePath);

$student = new Student(null,"Diego Ramos",new \DateTimeImmutable('1998-09-20'));

$sqlInsert = "INSERT INTO students(name,birth_date) values('{$student -> name()}', '{$student -> birthDate() -> format('Y-m-d')}');";

var_dump ($pdo -> exec($sqlInsert));



