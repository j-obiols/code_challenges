<?php

class Group{

    protected $name;
    protected $students = array();

    public function __construct($name){
        $this -> name = $name;
    }

    public function addStudent(Student $student){
        array_push($this->students, $student);
    }

    public function getStudents(){
        return $this -> students;
    }
} 