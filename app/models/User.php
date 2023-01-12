<?php

abstract class User
{
    // Regsiter user
    abstract public function register($data);

    // Login User
    abstract public function login($email, $password);

    // Find user by email
    abstract public function findUserByEmail($email);

    // Get User by ID
    abstract public function getUserById($id);
}
