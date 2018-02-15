<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-02-13
 * Time: 20:32
 */

namespace App\Classes;


class Checked
{

    public function checkAccountStatus($variable)
    {
        if($variable != "activate")
        {
            return false;
        }
        else
        {
            return true;
        }

    }

    public function checkToken($token, $activate_token)
    {
        $hash_obj = new Hash();
        $encrypted_token = $hash_obj->generateEncode($activate_token);

        if($encrypted_token == $token)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}