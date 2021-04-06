<?php

class User
{
    private $userId;
    private $firstName;
    private $lastName;
    private $birthday;
    private $email;

    public function __construct(int $id, string $firstName, string $lastName, string $email, string $birthday)
    {
        $this->userId = $id;
        $this->firstName = $firstName;

        $nameLowercase = strtolower($lastName);
        $uppercasename = ucfirst($nameLowercase);
        $this->lastName = $uppercasename;

        $this->birthday = $birthday;
        $this->email = $email;
    }
    
    public function getAge()
    {
        return floor((time() - strtotime($this->birthday)) / 31556926);   
    }

    public function isAdult($age){
        if($age>=18){
            return "maggiorenne";
        }else{
            return "minorenne";
        }
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

}