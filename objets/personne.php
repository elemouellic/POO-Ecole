<?php
abstract class Personne {
    protected $name;
    protected $surname;
    protected $address;

    public function getEtatCivil(){

        return $this->name." ".$this->surname."<br>".$this->address."<br>";

    }
}
?>