<?php

class Usuario{
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $gender;
    private $birthdate;

    public function __construct(
        $firstName, 
        $lastName, 
        $email, 
        $password, 
        $gender, 
        $birthdate
    ){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->gender->$gender;
        $this->birthdate->$birthdate;
    
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->passoword;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getGender(){
       return $this->gender;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getBirthdate(){
        return $this->birthdate;
    }

    public function setBirthdate($birthdate){
        $this->birthdate = $birthdate;
    }
}

?>