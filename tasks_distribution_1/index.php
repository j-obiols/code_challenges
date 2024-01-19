<?php


require "business_functions.php";
require "group.php";
require "taskList.php";


$victor = new Student("Victor");
$marian = new Student("Marian");
$salva = new Student("Salva");
$eva = new Student("Eva");
$marc = new Student("Marc");
$claudia = new Student("Clàudia");

$php = new Group("PHP");
$php -> addStudent($victor);
$php -> addStudent($marian);
$php -> addStudent($salva);
$php -> addStudent($eva);
$php -> addStudent($marc);
$php -> addStudent($claudia);

$masterclass = new Task("Masterclass");
$shortcut = new Task("Shortcut");

$weeklyTasks = new TaskList("Weekly Tasks");
$weeklyTasks -> addTask($masterclass);
$weeklyTasks -> addTask($shortcut);

distributeTasks($weeklyTasks, $php -> getStudents()); 