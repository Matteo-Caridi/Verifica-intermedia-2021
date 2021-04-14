<?php

class User
{
    private $userId;
    private $firstName;
    private $lastName;
    private $birthday;
    private $email;

    public function __construct($id,  $firstName,  $lastName,  $email,  $birthday)
    {
        $this->userId = $id;
        $this->firstName = $firstName;

        $nameLowercase = strtolower($lastName);
        $uppercasename = ucfirst($nameLowercase);
        $this->lastName = $uppercasename;

        $this->birthday = $birthday;
        $this->email = $email;
    }

    //secondo il metodo del prof:
    public function getAge($today = 'now')
    {
        $todayDateTime = new DateTime($today);
        $userDateTime = new DateTime($this->birthday);

        $ageDateInterval = $todayDateTime->diff($userDateTime);
        return $ageDateInterval->y;
        // return floor((time() - strtotime($this->birthday)) / 31556926); 
    }

    public function isAdult()
    {
        if ($this->getAge() >= 18) {
            return "true";
        } else {
            return "false";
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


    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of birthday
     *
     * @return  self
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }


    /**
     * Set the value of userId
     *
     * @return  self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
