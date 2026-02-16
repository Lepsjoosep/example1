<?php

class User 
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}

$user = new User("John Doe", "john@example.com");
echo $user->name;
echo $user->email;