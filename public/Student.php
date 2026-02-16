<?php

class Student
{
    public $name;
    public $age;
    public $grade; 

    public function introduction()
    {
        return "Hi, I'm {$this->name}, {$this->age} years old, and I'm in grade {$this->grade}";
    }
    
    public function study($subject)
    {
        return "{$this->name} is studying {$subject}";
    }
}

$student = new Student();
$student->name = "Gregor";
$student->age = 18;
$student->grade = 12;

echo $student->introduction(); 
echo $student->study("history");
