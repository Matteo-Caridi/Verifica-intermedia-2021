<?php

class User
{
    private $userId;
    private $firstName;
    private $lastName;
    private $birthday;
    private $email;

    public function __construct(int $userId, string $firstName, string $lastName, DateTime $birthday, string $email)
    {
        $this->userId = $userId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
        $this->email = $email;
    }
    
    public function getAge()
    {

        $dateBt = new DateTime($this->birthday);
        $today = new DateTime();
        return $today->diff($dateBt)->y;
    }
}