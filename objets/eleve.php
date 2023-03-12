<?php class Eleve extends Personne
{
    protected $level;
    protected static $headcount=0;

    public function Eleve($name, $surname, $address, $level)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->level = $level;
        self::$headcount++;
    }

    public function getEtatCivil(){
        return parent::getEtatCivil() . $this->level . "<br>";
    }

    public static function getEffectif()
    {
        return self::$headcount;
    }
}
?>