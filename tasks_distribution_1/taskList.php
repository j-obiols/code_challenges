<?php

class TaskList{

    protected $name;
    protected $tasks = array();


    public function __construct($name){
        $this -> name = $name;
    }

    public function addTask(Task $task){
        array_push($this -> tasks, $task);
    }

    public function getName(){
        return $this -> name;
    }

    public function getTasks(){
        return $this -> tasks;
    }

} 