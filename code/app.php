<?php

require_once('vendor/autoload.php');

$book1 = new PaperBook("Похождения Смирнова Ивана", "Смирнова таня", 2000, "Библиотека у дома");

echo $book1->info();

$book1->getByUser("Миша");

echo $book1->info();

$book1->returnToLibrary();

echo $book1->info();

$book2 = new ElectronicBook("Стихи Смирнова Ивана", "Смирнов Иван", 2001, "www.library.ru");

echo $book2->info();

$book2->download();

echo $book2->info();
