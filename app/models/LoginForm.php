<?php

namespace app\models;

use app\core\Application;
use app\core\Model;

class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Password'
        ];
    }

    public function login()
    {
        // find the user based on his email 
        $user = User::findOne(['email' => $this->email]);
        //  if it is not exist 
        if (!$user) {
            $this->addError('email', 'Admin does not exist with this email');
            return false;
        }
        // if so , then check password 
        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'The password is incorrect , Try again');
            return false;
        }

        // if So
        return Application::$app->login($user);
    }
}
