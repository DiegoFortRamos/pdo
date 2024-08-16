<?php

use pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(null,'Diego Ramos',new \DateTimeImmutable('1998-09-20'));



echo $student -> age();
