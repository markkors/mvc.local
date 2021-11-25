<?php


class user
{
    public string $id;
    public string $name;
    public string $password;

    public function __construct()
    {
        $this->id='-1';
        $this->name='no user';
        $this->password='no password';
    }

    /***
     * In deze functie vergelijken we het wachtwoord van de gebruiker met het ingevoerde wachtwoord
     * Let op: het betreft hier slechts een voorbeeld: er wordt geen enkele password encryptie gebruikt...
     * Gebruik in de praktijk: password_hash() samen met password_verify()
     *
     * @param $password
     * @return bool
     */
    public function checkpassword($password) : bool {
        return ($this->password == $password);
    }
}