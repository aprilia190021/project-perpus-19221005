<?php

class User {
    private $id;
    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->setPassword($password);
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        // Anda harus menghash kata sandi sebelum menyimpannya ke basis data
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function verifyPassword($password) {
        return password_verify($password, $this->password);
    }
}