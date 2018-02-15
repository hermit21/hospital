<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-02-13
 * Time: 20:32
 */

namespace App\Classes;


use App\Entity\Pacjenci;
use App\Entity\Pracownicy;

class Instances
{

    public function setPacjent($obj_pacjent)
    {
        $pacjent = new Pacjenci();
        $obj_hash = new Hash();

        $pacjent->setName($obj_pacjent->name);
        $pacjent->setSurname($obj_pacjent->surname);
        $pacjent->setAddress($obj_pacjent->address);
        $pacjent->setPesel($obj_pacjent->pessel);
        $pacjent->setIdentityCardNumber($obj_pacjent->identity_card_number);
        $pacjent->setTelephonNumber($obj_pacjent->telephon_number);
        $pacjent->setUsername($obj_pacjent->username);
        $pacjent->setPassword($obj_hash->makeHash($obj_pacjent->password, $obj_pacjent->salt));
        $pacjent->setSalt($obj_hash->generateEncode($obj_pacjent->salt));
        $pacjent->setAccessToken($obj_hash->generateEncode($obj_pacjent->access_token) );
        $pacjent->setPasswordToken($obj_hash->generateEncode($obj_pacjent->password_token));

        return $pacjent;
    }

    public function setPracownik($obj_pracownik)
    {
        $pracownik = new Pracownicy();

        $pracownik->setName($obj_pracownik->name);
        $pracownik->setSurname($obj_pracownik->surname);
        $pracownik->setAddress($obj_pracownik->address);
        $pracownik->setPesel($obj_pracownik->pessel);
        $pracownik->setIdentityCardNumber($obj_pracownik->identity_card_number);
        $pracownik->setTelephonNumber($obj_pracownik->telephon_number);
        $pracownik->setUsername($obj_pracownik->username);
        $pracownik->setPassword($obj_pracownik->password);
        $pracownik->setSalt($obj_pracownik->salt);
        $pracownik->setAccessToken($obj_pracownik->access_token);
        $pracownik->setPasswordToken($obj_pracownik->password_token);
        $pracownik->setEmployeeKey($obj_pracownik->employee_key);

        return $pracownik;
    }



}