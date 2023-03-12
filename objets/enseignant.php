<?php
    class Enseignant extends Personne{
    protected $subject; //matière ajoutée
    protected static $headcount=0;

    public function Enseignant($name, $surname, $address, $subject){
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->subject = $subject;
        self::$headcount++;
    }

    public function getEtatCivil(){
        return parent::getEtatCivil() . $this->subject . "<br>";
    }

    public static function getEffectif()
    {
        return self::$headcount;
    }

}
?>