<?php

require "task.php";
require "student.php";


function distributeTasks(TaskList $taskList, array $group){

    $tasks = $taskList -> getTasks();

    foreach($tasks as $task){
        
        $random = array_rand($group, 1);
        $studentName = $group[$random] -> getName();
        $taskName = $task -> getName();
        echo "Next week $studentName will be in charge of the $taskName.\n";
        unset($group[$random]);
    }
} 