<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-02-13
 * Time: 20:31
 */

namespace App\Classes;


class Hash
{

    public function sanetizeVariables($obj)
    {
        $result = new stdClass();

        foreach ($obj as $key => $value)
        {
            $result->$key = htmlspecialchars(trim($value), ENT_QUOTES, 'utf-8');
        }
        return $result;

    }

    public function makeHash($password, $salt)
    {
        return hash('sha-512', $password.$salt);
    }

    public function generateToken($lenght)
    {
        $letters = 'qwertyuiop[]{}1234567890QWERTYUIOPASDF!@#$%^&*()asdfghjkl:_-+=|zxcvbnm<>,.?~GHJKLZXCVBNM';
        $token = '';

        for($i = 0; $i < $lenght; $i++) {

        }

        return $token;
    }

    public function generateEncode($value)
    {
        return hash('sha-256', $value);
    }
}